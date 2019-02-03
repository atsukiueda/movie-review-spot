@extends('layouts.app')

@section('content')
    <a href="/">HOME</a>
    <div class="text-center">
        <h1>{{ $user->name }}</h1>
    </div>
    <!--お気に入り・投稿したレビュー一覧表示タブ追加する-->
    <!--お気に入り・レビュー削除ボタン追加する-->
@endsection