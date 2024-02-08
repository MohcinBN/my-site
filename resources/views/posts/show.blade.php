@include('layouts.head')
        <div class="container mt-5 col-md-8 mx-auto">
            @include('layouts.header')
            <div class="row">
                @include('layouts.nav')
                {{-- articles --}}
                <div class="col-md-9 mt-4">
                    <article>

                            <h2>
                                {{$post->title}}
                            </h2>
                            <div class="d-flex justify-content-between">
                                <p class="sub-title">Published at <span>{{ $post->createdAt() }}</span> </p>


                            </div>
                            @if($post->image)
                                <div class="post-image mt-3 mb-5">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-100">
                                </div>
                            @endif
                            <div class="entry-text mb-5">
                                {!! $post->body !!}
                            </div>

                    </article>

                </div>
            </div>
        </div>
    </body>
</html>
