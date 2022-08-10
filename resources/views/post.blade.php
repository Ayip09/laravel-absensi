@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $data->title }}</h2>
        <h5>{{ $data->author }}</h5>
        <p>{{ $data->content }}</p>
    </article>
    <a href="/posts">Back To Blog</a>
@endsection
