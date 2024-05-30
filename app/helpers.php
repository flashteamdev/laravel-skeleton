<?php

use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

if (! function_exists('authUser')) {
    function authUser(): User
    {
        // @phpstan-ignore-next-line
        return Auth::user();
    }
}

if (! function_exists('diskPublic')) {
    function diskPublic(): FilesystemAdapter
    {
        return Storage::disk('public');
    }
}

if (! function_exists('typeString')) {
    function typeString(mixed $value, string $fallback = ''): string
    {
        if (is_string($value)) {
            return $value;
        }

        try {
            // @phpstan-ignore-next-line
            return strval($value);
        } catch (Throwable) {
            return $fallback;
        }
    }
}

if (! function_exists('typeArray')) {
    /**
     * @param  array<mixed>  $fallback
     * @return array<mixed>
     *
     * @throws BindingResolutionException
     */
    function typeArray(mixed $value, array $fallback = []): array
    {
        if (is_array($value)) {
            return $value;
        }

        logger('Expect array -> '.gettype($value));

        return $fallback;
    }
}

if (! function_exists('typeInteger')) {
    function typeInteger(mixed $value, int $fallback = 0): int
    {
        if (is_int($value)) {
            return $value;
        }

        try {
            // @phpstan-ignore-next-line
            return intval($value);
        } catch (Throwable) {
            return $fallback;
        }
    }
}
