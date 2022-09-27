<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model implements AuthenticatableContract,CanResetPasswordContract
{
    use HasApiTokens, HasFactory, Notifiable;
    use AuthenticableTrait,CanResetPassword;
    use ValidatesRequests;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userRefuels(){
        return $this->hasMany(UserRefuels::class,'user_id');
    }
    public function userReprairs(){
        return $this->hasMany(UserReprairs::class,'user_id');
    }
    public function userCar(){
        return $this->hasMany(UserCar::class,'user_id');
    }
    public function userCarInfo(){
        return $this->hasMany(UserCarInfo::class,'user_id');
    }
}
