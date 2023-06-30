<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Mohcin Bounouara</title>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KCBYVGJBPB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KCBYVGJBPB');
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="bg-white">
        <div class="container mt-5 col-md-8 mx-auto">
            @include('layouts.header')
            <div class="row">
                @include('layouts.nav')
                {{-- articles --}}
                <div class="col-md-9 mt-4">
                    <div class="col-md-12 mb-5">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="search" name="search" id="search" class="form-control rounded-0" placeholder="search site..">
                        </form>
                    </div>
                    @foreach ($posts as $post)
                    <article>
                        <header>
                            <h2>
                                <a href="{{ $post->url() }}" class="fw-bold text-decoration-none text-black fs-3">{{$post->title}}</a>
                            </h2>
                            <div class="d-flex justify-content-between single-post">
                                <p class="sub-title">published at <span>{{ $post->createdAt() }}</span> </p>
                                <p><i class="fas fa-clock"></i>  {{ post_reading_time_estimation($post) }}</p>
                                
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
