@extends('layouts.main')

@section('container')
    <article class="mx-auto">
        <h2>{{ $post["title"] }}</h2>
        <h5>By : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/posts">Back to Blog</a>
@endsection