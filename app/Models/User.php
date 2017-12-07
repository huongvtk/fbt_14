<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 
        'email',
        'password',
        'fullname',
        'date_birth',
        'gender',
        'address',
        'phone',
        'booking_id',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function rates() 
    {
        return $this->hasMany(Rate::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public function reviews() 
    {
        return $this->hasMany(Review::class);
    }

    public function likes() 
    {
        return $this->hasMany(Like::class);
    }

    public function bookingTours() 
    {
        return $this->hasMany(BookingTour::class);
    }

    public function bankDetails() 
    {
        return $this->hasMany(BankDetail::class);
    }
}
