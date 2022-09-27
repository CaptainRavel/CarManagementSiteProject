<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBase extends Model
{
    use HasFactory;

    public function carMakes(){
        return $this->hasMany(CarMakes::class,'make_id');
    }

    protected $fillable = [
        'model',
        'make',
        'make_id',
        'generation',
        'year_from',
        'year_to',
        'series',
        'trim',
        'body_type',
        'number_of_seats',
        'length_mm',
        'width_mm',
        'height_mm',
        'wheelbase_mm',
        'front_track_mm',
        'rear_track_mm',
        'curb_weight_kg',
        'wheel_size_r14',
        'ground_clearance_mm',
        'trailer_load_with_brakes_kg',
        'payload_kg',
        'back_track_width_mm',
        'front_track_width_mm',
        'clearance_mm',
        'Npęd na wszystkie koła_weight_kg',
        'front_rear_axle_load_kg',
        'max_trunk_capacity_l',
        'minimum_trunk_capacity_l',
        'maximum_torque_n_m',
        'injection_type',
        'overhead_camshaft',
        'cylinder_layout',
        'number_of_cylinders',
        'compression_ratio',
        'engine_type',
        'valves_per_cylinder',
        'boost_type',
        'cylinder_bore_mm',
        'stroke_cycle_mm',
        'engine_placement',
        'turnover_of_maximum_torque_rpm',
        'max_power_kw',
        'presence_of_intercooler',
        'capacity_cm3',
        'engine_hp',
        'engine_hp_rpm',
        'drive_wheels',
        'number_of_gears',
        'turning_circle_m',
        'transmission',
        'mixed_fuel_consumption_per_100_km_l',
        'range_km',
        'fuel_tank_capacity_l',
        'acceleration_0_100_km/h_s',
        'max_speed_km_per_h',
        'fuel_grade',
        'back_suspension',
        'rear_brakes',
        'front_brakes',
        'front_suspension',
        'car_class',
        'country_of_origin',
        'number_of_doors'                     
    ];

    protected $hidden = [
    ];
}
