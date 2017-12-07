<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'id',
        'user_id', 
        'review_id',
        'num_like',
    ];

    public function review() 
    {
        return $this->belongsTo(Review::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
