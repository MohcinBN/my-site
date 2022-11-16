<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'posts' => Post::simplePaginate(5)
        ]);
    }

    public function show(Post $slug)
    {
        return view('posts.show', ['post' => $slug]);
    }
}
