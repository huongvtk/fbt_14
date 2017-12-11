<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'bank_id',
        'bank_account',
    ];

    public function bank() 
    {
        return $this->belongsTo(Bank::class);
    }
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
