<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('blog.blog', [
            'posts' => $posts,
        ]);
    }
}
