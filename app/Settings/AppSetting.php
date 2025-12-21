<?php

declare(strict_types=1);

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

final class AppSetting extends Settings
{
    public static function group(): string
    {
        return 'app';
    }
}
