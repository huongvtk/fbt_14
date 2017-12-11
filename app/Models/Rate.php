<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
        'id',
        'tour_id', 
        'user_id',
        'points',
    ];

    public function tour() 
    {
        return $this->belongsTo(Tour::class);
    }
    
    public function user() 
    {
        return $this->belongTo(User::class);
    }
}
