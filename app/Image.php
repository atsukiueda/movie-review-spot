<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['movie_id', 'path'];

    
    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
