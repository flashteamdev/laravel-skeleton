<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as NotificationsVerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

final class VerifyEmail extends NotificationsVerifyEmail implements ShouldQueue
{
    use Queueable;
}
