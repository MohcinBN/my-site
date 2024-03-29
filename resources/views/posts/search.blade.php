@include('layouts.head')
        <div class="container mt-5 col-md-8 mx-auto">
            @include('layouts.header')
            <div class="row">
                @include('layouts.nav')
                {{-- articles --}}
                <div class="col-md-9 mt-4">
                    <h1>Search results for "{{ $query }}"</h1>
                    <ul>
                        @foreach ($posts as $post)
                        <li>
                            <a href="{{ $post->url() }}">{{ $post->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
