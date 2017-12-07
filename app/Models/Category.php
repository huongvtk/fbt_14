<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'cat_name',
        'parent_id',
    ];

    public function tours() 
    {
        return $this->hasMany(Tour::class);
    }
}
