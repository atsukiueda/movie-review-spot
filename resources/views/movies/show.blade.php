@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="imagesize.css">
    <div clsss="row">
        <a href="/">HOME</a>
        <h1 class="pb-5">{{ $movie->title }}</h1>
        <h1 class="mt-5">{{ $movie->content }}</h1>
        <div class="image_size">
        @foreach($movie->images as $image)
            <img src="{{ asset('movie/' .$image->path) }}">
        @endforeach
        </div>
        {!! link_to_route('reviews.create', 'レビュー投稿', [ 'movie_id' => $movie->id ],  ['class' => 'btn btn-outline-primary btn-lg']) !!}
    </div>
@endsection