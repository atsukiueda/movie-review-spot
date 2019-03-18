@extends('layouts.app')



<h1 class="text-center">映画登録ページ</h1>
<a href="/">HOME</a>
@if (count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="/create" method="POST" enctype="multipart/form-data">
    <label for="title">映画タイトル:</label>
    <input type="text" class="form-control" name="title" value="">
    <br>
    <label for="content">映画の説明:</label>
    <br>
    <textarea name="content" cols="50" rows="5"></textarea>
    <br>
    <label for="image">画像ファイル:</label>
    <input type="file" class="form-control" name="files[][image]" multiple>
    <br>
    <hr>
    {{ csrf_field() }}
    <button class="btn btn-success"> Upload </button>
</form>