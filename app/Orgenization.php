<?php


namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Orgenization extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'full_name', 'email', 'password','number_of_staff','month_stars',
        'total_stars','phone3','phone2','phone1','address_detailed',
        'city','country','location_url','full_intro','brief_intro','logo',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
