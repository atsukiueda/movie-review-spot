<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Review;
use App\Movie;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $reviews = $user->reviews()->orderBy('created_at', 'desc')->get();
        
        $data = [
            'user' => $user,
            'reviews' => $reviews,
        ];

        return view('users.show', $data);
    }
    
    public function favorites($id)
    {
        $user = User::find($id);
        $favorites = $user->favorites();
        
        $data = [
            'user' => $user,
            'movies' => $favorites
        ];
        
        $data += $this->counts($user);
        
        return view ('users.favorites', $data);
    }
}
