@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>映画一覧</h1>
    </div>
    @include('movies.movies', ['movies' => $movies])
@endsection