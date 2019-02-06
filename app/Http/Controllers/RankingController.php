<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ranking;

class RankingController extends Controller
{
    public function show() {
        
        $average_score = \App\Review::avg('review_rank');
        
        return view('ranking.show');
    }
}
