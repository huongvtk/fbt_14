<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'id',
        'region_name',
    ];

    public function tours() 
    {
        return $this->hasMany(Tour::class);
    }
}
