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
    public function edit($id)
    {
       $post = Post::where('id', $id)->first();
       //dd($post);
       return view('backend.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        try {
            $post = Post::FindOrFail($id);
            $post->title = $request->title;
            $post->slug = Str::slug($request->title);
            $post->body = trim($request->body);

            //dd($post);
     
            $post->update();
     
            return redirect('backend/home')->with('status', 'Post updated!');
        } catch (\Throwable $e) {
            throw $e;
        }
        
    }
    public function destroy(Post $post, $id)
    {
        try {
            $post = Post::FindOrFail($id);
            $post->delete();
     
            return redirect('backend/home')->with('status', 'Post deleted!');
        } catch (\Throwable $e) {
            throw $e;
        }
    }

    public function isPibished($id)
    {
      $changeStatus = Post::FindOrFail($id);

      dd($changeStatus);
    }
}
