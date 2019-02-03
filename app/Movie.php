<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'content'];
    
    public function reviews() {
        return $this->hasMany(Review::class);
    }
    
    public function images() {
        return $this->hasMany(Image::class);
    }
}
