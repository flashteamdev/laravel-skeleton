<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

if (! function_exists('authUser')) {
    function authUser(): User
    {
        return type(Auth::user())->as(User::class);
    }
}

if (! function_exists('diskPublic')) {
    function diskPublic(): FilesystemAdapter
    {
        return Storage::disk('public');
    }
}

if (! function_exists('escapeTelegramMarkdownV2')) {
    /**
     * Escape các ký tự đặc biệt cho Telegram MarkdownV2 format
     * Các ký tự cần escape: _, *, [, ], (, ), ~, `, >, #, +, -, =, |, {, }, ., !
     *
     * @param  string  $text  Text cần escape
     * @return string Text đã được escape
     */
    function escapeTelegramMarkdownV2(string $text): string
    {
        // Các ký tự đặc biệt cần escape trong MarkdownV2
        $specialChars = ['_', '*', '[', ']', '(', ')', '~', '`', '>', '#', '+', '-', '=', '|', '{', '}', '.', '!'];

        $escaped = $text;

        foreach ($specialChars as $char) {
            $escaped = str_replace($char, '\\'.$char, $escaped);
        }

        return $escaped;
    }
}
