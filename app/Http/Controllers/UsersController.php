<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Review;

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
}
