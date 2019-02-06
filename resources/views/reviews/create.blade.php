@extends('layouts.app')

<h1>レビュー投稿ページ</h1>
<a href="/">HOME</a>

{!! Form::model($review, ['route' => 'reviews.store']) !!}
    <div class="form-group">
        {{ Form::hidden('movie_id', $movie_id) }}
        {!! Form::label('content', 'レビュー') !!}
        {!! form::textarea('content', null,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('review_rank', '点数（１〜１００の範囲で点数をつけてください）') !!}
        {!! Form::number('review_rank', null,  ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}