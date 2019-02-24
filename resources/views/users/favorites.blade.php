@extends('layouts.app')

@section('content')
    @include('movies.movies', ['movie' => $movie])
@endsection