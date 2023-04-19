<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): object
    {
        return view('welcome', [
            'posts' => Post::where('status', 1)->orderByRaw('(created_at) DESC')->simplePaginate(5)
        ]);
    }

    public function show(Post $slug)
    {
        return view('posts.show', ['post' => $slug]);
    }

    public function search(){

    }
}
