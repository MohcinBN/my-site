<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'posts' => Post::where('status', 1)->orderByRaw('updated_at - created_at ASC')->simplePaginate(5)
        ]);
    }

    public function show(Post $slug)
    {
        return view('posts.show', ['post' => $slug]);
    }
}
