<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password){ //this is called a mutator
        $this->attributes['password'] = bcrypt($password);
    }

    public function product(){
        return $this->hasOne(Product::class);

    }
//    public function setCategoryAttribute($value)
//    {
//        $this->attributes['category'] = json_encode($value);
//    }
//
//    public function getCategoryAttribute($value)
//    {
//        return $this->attributes['category'] = json_decode($value);
//    }
}


