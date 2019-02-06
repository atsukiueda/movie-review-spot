@foreach($reviews as $review)
    
        <div>
            <sapn>posted at {{ $review->created_at }}</sapn>
        </div>
        <div>
            <p>{!! nl2br(e($review->content)) !!}</p>
        </div>
    
@endforeach