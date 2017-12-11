<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'id',
        'prices',
    ];

    public function priceTours() 
    {
        return $this->hasMany(PriceTour::class);
    }
}
