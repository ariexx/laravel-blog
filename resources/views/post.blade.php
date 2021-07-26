
@extends('layout.main')

@section('title', $title->title)

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>

    {{ $post->body }}
    <p class="mt-3"><a href="">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
</article>
<a href="/blog">Back To Blog</a>
@endsection
