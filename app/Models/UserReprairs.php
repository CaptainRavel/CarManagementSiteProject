<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReprairs extends Model
{
    use HasFactory;
    protected $fillable = [        
        'user_id',
        'reprair_date' ,
        'car_mileage',
        'reprair_location',
        'reprair_subject',
        'price'
    ];

    protected $hidden = [
        'reprair_id'
    ];
}
