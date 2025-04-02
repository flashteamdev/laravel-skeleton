<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('blog.blog-detail', [
            'post' => $post,
        ]);
    }
}
