@extends('layouts.app')

@section('content')
    <div clsss="row">
        <a href="/">HOME</a>
        <h1 class="pb-5">{{ $movie->title }}</h1>
        <h1 class="mt-5">{{ $movie->content }}</h1>
        @foreach($movie->images as $image)
            <img src="{{ asset('movie/' .$image->path) }}">
        @endforeach
    </div>
@endsection