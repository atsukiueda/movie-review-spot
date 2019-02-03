<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;

class ReviewsController extends Controller
{
    public function index() {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $reviews = $user->reviews()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'reviews' => $reviews,
            ];
        }
        
        return view($data);
        
    }
}
