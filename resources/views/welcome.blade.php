@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>タイトル</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 mt-sm-5">
            @if (Auth::check())
                {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-outline-warning btn-lg']) !!}
                {!! link_to_route('users.show', 'ユーザーページへ',['id' => Auth::id()], ['class' => 'btn btn-outline-primary']) !!}
            @else
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-outline-success btn-lg']) !!}
                <div class="mt-sm-2">
                {!! link_to_route('signup.get', 'ユーザー登録', [], ['class' => 'btn btn-outline-primary btn-lg']) !!}
                </div>
            @endif
        </div>
    </div>
@endsection