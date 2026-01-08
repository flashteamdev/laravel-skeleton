<?php

declare(strict_types=1);

namespace App\Jobs;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Job để gửi message qua Telegram Bot API
 */
final class TelegramSendMessageJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Xác định số lần thử lại job khi thất bại
     */
    public int $tries = 3;

    /**
     * @param  string  $botToken  Telegram Bot Token
     * @param  string  $chatId  Chat ID của người nhận (có thể là user ID hoặc channel username)
     * @param  string  $message  Nội dung message cần gửi
     * @param  string|null  $parseMode  Parse mode cho message (html, markdown, markdownv2)
     * @param  bool  $disableWebPagePreview  Tắt web page preview trong message
     * @param  bool  $disableNotification  Gửi message một cách im lặng (không phát âm thanh)
     * @param  array<string, mixed>|null  $customPayload  Payload tùy chỉnh để merge vào payload chính (có thể override các tham số trên)
     */
    public function __construct(
        private readonly string $botToken,
        private readonly string $chatId,
        private readonly string $message,
        private readonly ?string $parseMode = null,
        private readonly bool $disableWebPagePreview = false,
        private readonly bool $disableNotification = false,
        private readonly ?array $customPayload = null,
    ) {}

    /**
     * Execute the job.
     * Gửi message tới Telegram Bot API
     */
    public function handle(): void
    {
        $apiUrl = "https://api.telegram.org/bot{$this->botToken}/sendMessage";

        /** @var array<string, mixed> $payload */
        $payload = [
            'chat_id' => $this->chatId,
            'text' => $this->message,
        ];

        // Thêm các tham số tùy chọn nếu được cung cấp
        if ($this->parseMode !== null) {
            $payload['parse_mode'] = $this->parseMode;
        }

        if ($this->disableWebPagePreview) {
            $payload['disable_web_page_preview'] = true;
        }

        if ($this->disableNotification) {
            $payload['disable_notification'] = true;
        }

        // Merge custom payload nếu có (custom payload sẽ override các giá trị trên)
        if ($this->customPayload !== null && $this->customPayload !== []) {
            $payload = array_merge($payload, $this->customPayload);
        }

        try {
            /** @var \Illuminate\Http\Client\Response $response */
            $response = Http::timeout(30)
                ->post($apiUrl, $payload);

            $statusCode = $response->status();

            // Xử lý trường hợp rate limit (429)
            if ($statusCode === 429) {
                /** @var array<string, mixed>|null $responseBody */
                $responseBody = $response->json();

                // Lấy retry_after từ response, mặc định 60 giây nếu không có
                $retryAfter = 60;
                if (is_array($responseBody) && isset($responseBody['parameters']) && is_array($responseBody['parameters'])) {
                    $retryAfter = is_int($responseBody['parameters']['retry_after'] ?? null)
                        ? $responseBody['parameters']['retry_after']
                        : 60;
                }

                // Release job về queue với delay bằng retry_after (tính bằng giây)
                $this->release($retryAfter);

                return;
            }

            if ($statusCode < 200 || $statusCode >= 300) {
                Log::channel('daily')->error('Gửi Telegram message thất bại', [
                    'chat_id' => $this->chatId,
                    'status' => $statusCode,
                    'body' => $response->body(),
                ]);

                // Ném exception để Laravel retry job nếu cần
                $response->throw();
            }
        } catch (Exception $e) {
            Log::channel('daily')->error('Lỗi khi gửi Telegram message', [
                'chat_id' => $this->chatId,
                'error' => $e->getMessage(),
            ]);

            // Re-throw exception để Laravel xử lý retry logic
            throw $e;
        }
    }

    /**
     * Xác định số giây phải chờ trước khi retry lại job
     *
     * @return array<int, int>
     */
    public function backoff(): array
    {
        return [10, 30, 60]; // Chờ 10s, 30s, 60s trước mỗi lần retry
    }
}
