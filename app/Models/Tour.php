<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'id', 
        'owner_id', 
        'category_id', 
        'region_id', 
        'tour_name', 
        'num_day', 
        'picture', 
        'description', 
        'amount', 
        'check_approve',
    ];

    public function reviews() 
    {
        return $this->hasMany(Review::class);
    }

    public function rates() 
    {
        return $this->hasMany(Rate::class);
    }

    public function priceTours() 
    {
        return $this->hasMany(PriceTour::class);
    }

    public function bookingTours() 
    {
        return $this->hasMany(BookingTour::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function region() 
    {
        return $this->belongsTo(Region::class);
    }
}
