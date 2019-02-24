@extends('layouts.app')

@section('content')
<div class="row">
    <table class="text-center col-sm-3 offset-4 mt-4 table table-hover">
        <tbody>
            @foreach ($movie as $movie)
            <tr>
                <th>タイトル</th>
                <th>平均スコア</th>
            </tr>
            <tr>
                 <td>{{ $movie->title }}</td>
                 <td>{{ $movie->review_rank }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection