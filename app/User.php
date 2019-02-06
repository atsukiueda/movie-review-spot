<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function reviews() {
        return $this->hasMany(Review::class);
    }
    
    public function favorites()
    {
        return $this->belongsToMany(Movie::class, 'movie_user', 'user_id', 'movie_id')->withTimestamps();
    }
    
    public function is_favorite($movieId)
    {
        return $this->favorites()->where('movie_id', $movieId)->exists();
    }
    
    public function favorite($movieId)
    {
        $exist = $this->is_favorite($movieId);
        
        if ($exist) {
            return false;
        } else {
            $this->favorites()->attach($movieId);
        }
    }
    
    public function unfavorite($movieId) {
        $exist = $this->is_favorite($movieId);
        
        if($exist) {
            $this->favorites()->detach($movieId);
        } else {
            return false;
        }
    }
    
}
