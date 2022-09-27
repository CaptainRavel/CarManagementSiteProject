<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRefuels extends Model
{
    use HasFactory;
    protected $fillable = [        
        'user_id',
        'fuel' ,
        'price',
        'refueling_date',
        'avg_fuel_consumption' 
    ];

    protected $hidden = [
        'refueling_id'
    ];

    public function userRefuel(){
        return $this->belongsTo(User::class, 'id');
    }
}
