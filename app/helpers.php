<?php

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
