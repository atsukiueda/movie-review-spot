@if (Auth::user()->is_favorite($movie->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $movie->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入りから外す', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $movie->id]]) !!}
            {!! Form::submit('お気に入りに追加する', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif