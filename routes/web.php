<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index'])->name('blog');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
