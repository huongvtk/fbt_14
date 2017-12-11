<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'id',
        'bank_name',
        'bank_code',
        'address',
        'phone',
    ];

    public function bankDetails() 
    {
        return $this->hasMany(BankDetail::class);
    }
}
