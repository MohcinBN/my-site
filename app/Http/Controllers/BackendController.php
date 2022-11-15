<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class BackendController extends Controller
{
    // list of posts
    public function index()
    {
       return view('backend.home', [
            'posts' => Post::simplePaginate(5)
       ]);
    }


    public function create()
    {
        return view('backend.create');
    }
    public function store(PostRequest $request)
    {
        try {
            $post = new Post();
            $post->title = $request->title;
            $post->slug = Str::slug($request->title);
            $post->body = trim($request->body);
     
            $post->save();
     
            return redirect('backend/home')->with('status', 'Post added!');
        } catch (\Throwable $e) {
            throw $e;
        }

    }
}
