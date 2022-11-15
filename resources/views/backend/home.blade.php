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
                    <td>Edit | Delete</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
        </div>
    </div>
</div>
@endsection
