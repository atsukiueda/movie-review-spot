@foreach($reviews as $review)
    
        <div>
            <sapn>posted at {{ $review->created_at }}</sapn>
        </div>
        <div>
            <p>{!! nl2br(e($review->movie->title)) !!}</p>
            <p>{!! nl2br(e($review->content)) !!}</p>
        </div>
        <div>
            @if (Auth::id() == $review->user_id )
                {!! Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
                    {!! Form::submit('レビュー削除', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    
@endforeach