@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Blog Pots List</h2>
            @if (session('status'))
            <div class="alert alert-success" style="font-weight: bold;">
                {{ session('status') }}
            </div>
            @endif
    
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Check Those Errors!</strong> 
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                  <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td colspan="2">{{ $post->title }}</td>
                    <td class="d-flex">
                      
                      <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success mr-3">Edit</a>
                      
                      <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>

                      <form action="{{ route('post.status', $post->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <button type="submit" class="btn btn-success">Change Status</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
        </div>
    </div>
</div>
@endsection
