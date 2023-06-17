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
                    <article>
                        <header>
                            <h2>
                                {{$post->title}}
                            </h2>
                            <div class="d-flex justify-content-between">
                                <p class="sub-title">Published at <span>{{ $post->createdAt() }}</span> </p>
                                <!--<p class="sub-title">Reading time: <span>{{ //post_reading_time_estimation($post) }}</span> </p>-->

                            </div>
                            <div class="post-image mt-2 mb-2">
                                <img src="{{ asset('images/'. $post->image) }}" alt="{{$post->title}}" class="w-100">
                            </div>
                            <div class="entry-text mb-5">
                                {{$post->body}}
                            </div>
                        </header>
                    </article>

                </div>
            </div>
        </div>
    </body>
</html>
