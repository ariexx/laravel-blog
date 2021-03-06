@extends('layout.main')
@section('container')
@section('title', $title = "Category")

<h5>Post Category : {{ $category }}</h5>
@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach

@endsection
