<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingTour extends Model
{
    protected $fillable = [
        'id',
        'tour_id',
        'date_create',
        'start_day',
        'num_people',
        'total_price',
        'num_child',
        'user_id',
        'status',
    ];

    public function tour() 
    {
        return $this->belongsTo(Tour::class);
    }
    
    public function bookingDetail() 
    {
        return $this->hasOne(BookingDetail::class);
    }
}
