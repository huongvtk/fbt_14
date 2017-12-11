<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id',
        'tour_id', 
        'user_id',
        'content',
    ];

    public function likes() 
    {
        return $this->hasMany(Like::class);
    }

    public function tour() 
    {
        return $this->belongsTo(Tour::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public function user() 
    {
        return $this->belongTo(User::class);
    }
}
