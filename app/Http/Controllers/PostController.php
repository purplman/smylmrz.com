<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('id')->get();

        return view('app.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('app.posts.show', compact('post'));
    }
}
