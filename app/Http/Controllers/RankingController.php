<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;
use App\Review;

class RankingController extends Controller
{
    public function show() {
        $movies = DB::table('movies')
                    ->selectRaw('movies.id, avg(review_rank) review_rank, title')
                    ->join('reviews', 'movies.id', '=', 'reviews.movie_id')
                    ->orderByRaw('avg(reviews.review_rank) desc')
                    ->groupBy('movies.id', 'movies.title')
                    ->limit(3)
                    ->get();
                    
       
            
        
    
        return view('ranking.show', ['movie' => $movies]);
    }
}
