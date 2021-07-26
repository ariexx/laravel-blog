@extends('layout.main')
@section('container')
@section('title', 'Blog')

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-3">
    <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>Ditulis oleh : <a href="" class="text-decoration-none">{{ $post->user->name }}</a> di <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
</article>
@endforeach

@endsection
