<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;
use App\Movie;
use App\User;

class ReviewsController extends Controller
{
    public function index() {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $reviews = $user->reviews()->orderBy('created_at', 'desc')->get();
            
            $data = [
                'user' => $user,
                'reviews' => $reviews,
            ];
        }
        
        return view('users.show', $data);
        
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'content' => 'required',
            'review_rank' => 'required|between:1,100',
            ]);
        
        $request->user()->reviews()->create([
            'content' => $request->content,
            'review_rank' => $request->review_rank,
            'movie_id' =>  $request->movie_id,
        ]);
        
        
            
        return redirect('movies');
        
        
    }
    
    public function destroy($id) {
        $review = \App\Review::find($id);
        
        if (\Auth::id() === $review->user_id) {
            $review->delete();
        }
        
        return back();
    }
    
    public function create(Request $request) {
        
        $review = new Review();
        
        
        return view('reviews.create', [
            'review' => $review,
            'movie_id' => $request->movie_id
            ]);
    }
}
