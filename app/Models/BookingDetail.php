<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $fillable = [
        'id',
        'fullname',
        'booking_id',
        'date_birth',
        'gender',
        'address',
        'phone',
        'cmnd',
        'job',
    ];

    public function bookingTour() 
    {
        return $this->belongsTo(BookingTour::class);
    }
}
