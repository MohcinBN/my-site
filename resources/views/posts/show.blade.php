@include('layouts.head')
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
                               

                            </div>
                            <div class="post-image mt-2 mb-2 d-none">
                                <img src="{{ asset('images/'. $post->image) }}" alt="{{$post->title}}" class="w-100">
                            </div>
                            <div class="entry-text mb-5">
                                {!! $post->body !!}
                            </div>
                        </header>
                    </article>

                </div>
            </div>
        </div>
    </body>
</html>
