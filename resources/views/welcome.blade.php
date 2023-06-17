<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Mohcin Bounouara</title>

    </head>
    <body class="bg-white">
        <div class="container mt-5 col-md-8 mx-auto">
            @include('layouts.header')
            <div class="row">
                @include('layouts.nav')
                {{-- articles --}}
                <div class="col-md-9 mt-4">
                    <div class="col-md-6 my-4 offset-6">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="search" name="search" id="search" class="form-control" placeholder="search site..">
                        </form>
                    </div>
                    @foreach ($posts as $post)
                    <article>
                        <header>
                            <h2>
                                <a href="{{ $post->url() }}" class="fw-bold text-decoration-none text-black fs-3">{{$post->title}}</a>
                            </h2>
                            <div class="d-flex justify-content-between">
                                <p class="sub-title">Published at <span>{{ $post->createdAt() }}</span> </p>
                                <!--<p class="sub-title"><span>{{ post_reading_time_estimation($post) }} read</span> </p>-->
                            </div>
                            <div class="entry-text">
                                {{$post->postExcerpt()}}
                            <p class="mt-6">
                                <a href="{{ $post->url() }}">Read more</a>
                            </p>
                            </div>
                        </header>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
