@extends('layout.main')
@section('title', 'About')
@section('container')
@foreach ($abouts as $about)

    <div class="content-justify-center">
        <div class="card-body text-center">
            <img src="assets/img/luffy.jpg" alt="Luffy" width="200" class="rounded-circle">
            <h5 class="card-title mt-3">{{ $about->name }}</h5>
            <p class="text-muted">{{ $about->about }}</p>
            <a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
@endforeach
@endsection
