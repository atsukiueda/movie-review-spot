<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['content', 'review_rank', 'movie_id', 'user_id'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
   
   public function movie() {
       return $this->belongsTo(Movie::class);
   }
   
}
