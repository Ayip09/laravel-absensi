@extends ('layouts.main')

@section('container')
    @if ($posts)
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2>
                    <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                <h5>{{ $post->author }}</h5>
                <p>{{ $post->content }}</p>
                <a class="me-2" href="/post/{{ $post->id }}/edit">Edit</a><a href="/post/{{ $post->id }}/hapus">Hapus</a>
            </article>
        @endforeach
    @endif

    <a href="/post/new">Create New Post</a>
@endsection
