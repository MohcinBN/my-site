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

    public function search_posts(Request $request)
    {
        $query = $request->search;
        $like = 'LIKE';

        $posts = Post::where('title', $like, "%$query%")
            ->orWhere('body', $like, "%$query%")
            ->paginate(20);

        //dd($posts);

        return view('posts.search', compact('posts', 'query'));
    }
}
