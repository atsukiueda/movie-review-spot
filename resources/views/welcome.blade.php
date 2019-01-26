@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>タイトル</h1>
            {!! link_to_route('signup.get', 'ユーザー登録', [], ['class' => 'btn btn-outline-primary btn-lg']) !!}
        </div>
    </div>
@endsection