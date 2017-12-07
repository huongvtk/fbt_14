<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'review_id',
        'content',
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
