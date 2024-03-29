@include('layouts.head')
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
                            <h2>
                                <a href="{{ $post->url() }}" class="fw-bold text-decoration-none text-black fs-3">{{$post->title}}</a>
                            </h2>
                            <div class="d-flex justify-content-between single-post">
                                <p class="sub-title">published at
                                    <span>
                                        @php
                                            $post_date = $post->createdAt();
                                            $timestamp = strtotime($post_date);
                                            $formattedDate = date('d-m-Y', $timestamp);
                                        @endphp
                                    {{
                                       $formattedDate
                                    }}
                                    </span>
                                </p>
                                <p><i class="fas fa-clock"></i>  {{ post_reading_time_estimation($post) }}</p>

                            </div>
                            <div class="tags">
                                    @foreach ($post->tags as $tag)
                                        <span>{{ $tag->name }}</span>
                                    @endforeach
                            </div>
                            <div class="entry-text">
                                {!! $post->postExcerpt() !!}
                            </div>
                            <p class="mt-6">
                                <a href="{{ $post->url() }}" class="read-more">Read more</a>
                            </p>
                    </article>
                    @endforeach

                           <div class="navigation my-5 d-flex justify-content-center">
                            {{ $posts->links() }}
                           </div>

                </div>
            </div>
        </div>
    </body>
</html>
