<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AppSetting extends Settings
{
    public static function group(): string
    {
        return 'app';
    }
}
