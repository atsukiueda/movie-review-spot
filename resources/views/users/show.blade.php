@extends('layouts.app')

@section('content')
<a href="/">HOME</a>
<div class="row">
    <div class="col-sm-4 mt-4">
        <h1>{{ $user->name }}</h1>
    </div>

    <!--お気に入り・投稿したレビュー一覧表示タブ追加する-->
    <div class="col-sm-8 mt-5">
        <h2>投稿したレビュー</h2>
                @if (count($reviews) > 0)
                    @include('reviews.reviews', ['reviews' => $reviews])
                @endif
    </div>
    <!--お気に入り・レビュー削除ボタン追加する-->
       
                    
                
</div>
@endsection