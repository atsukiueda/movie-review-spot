@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/style.css">
    <div class="jumbotron">
        <div class="text-center">
            <h1>Movie Review Spot</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 mt-sm-5">
            @if (Auth::check())
                {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-outline-warning btn-lg']) !!}
                <div class="mt-sm-4">
                {!! link_to_route('users.show', 'ユーザーページへ',['id' => Auth::id()], ['class' => 'btn btn-outline-primary']) !!}
                {!! link_to_route('movies.create', '映画登録', [], ['class' => 'btn btn-outline-primary btn-lg']) !!}
                {!! link_to_route('movies.index', '映画一覧', [],  ['class' => 'btn btn-outline-primary btn-lg']) !!}
                {!! link_to_route('ranking.show', '映画ランキング', [],  ['class' => 'btn btn-outline-primary btn-lg']) !!}
                </div>
            @else
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-outline-success btn-lg']) !!}
                <div class="mt-sm-4">
                {!! link_to_route('signup.get', 'ユーザー登録', [], ['class' => 'btn btn-outline-primary btn-lg']) !!}
                </div>
            @endif
        </div>
        <div class="col-sm-10">
            <h3>このサイトは皆さんに好きな映画をアップロードしていただいて、その映画のおすすめポイントや好きな場面をコメントとして書いてもらえる
            サイトです。みんなにレビューをもらうこともできます。映画アップロードの際はお手数ですが、映画の画像ファイルもご用意ください。</h3>
        </div>
    </div>

@endsection