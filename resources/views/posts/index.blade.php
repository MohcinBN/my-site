<h2>Posts List</h2>

<ul>
    @foreach ($posts as $post)
        <li><a href="{{$post->url()}}">{{$post->title}}</a></li>
    @endforeach
</ul>