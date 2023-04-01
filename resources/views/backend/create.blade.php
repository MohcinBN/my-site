@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Create new post</h2>
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

            <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label fs-5">Post Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="enter post title">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label fs-5">Post Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <input value=".." type="text" class="form-control" name="slug" id="slug" placeholder="enter post title" hidden>
                <div class="mb-3">
                    <label for="body" class="form-label fs-5">Post Body</label>
                    <textarea name="body" class="form-control" id="summernote" cols="30" rows="50" placeholder="Write us your thinking">

                    </textarea>
                </div>

                <button type="submit" class="mt-3 btn btn-success">Publish</button>
            </form>

        </div>
    </div>
</div>
@endsection
