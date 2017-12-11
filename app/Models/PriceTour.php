<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceTour extends Model
{
    protected $fillable = [
        'id',
        'price_id',
        'tour_id', 
        'date',
    ];

    public function price() 
    {
        return $this->belongsTo(Price::class);
    }

    public function tour() 
    {
        return $this->belongsTo(Tour::class);
    }
}
