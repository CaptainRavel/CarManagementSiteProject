<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarBase;

class CarSeeder extends Seeder
{
    public function run()
    {
        CarBase::truncate();
  
        $csvFile = fopen(base_path("database/data/car_base.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 55550000, ",")) !== FALSE) {
            if (!$firstline) {
                CarBase::create([
                    "model"=>$data['0'],
                    "make"=>$data['1'],
                    "make_id"=>$data['2'],
                    "generation"=>$data['3'],
                    "year_from"=>$data['4'],
                    "year_to"=>$data['5'],
                    "series"=>$data['6'],
                    "trim"=>$data['7'],
                    "body_type"=>$data['8'],
                    "number_of_seats"=>$data['9'],
                    "length_mm"=>$data['10'],
                    "width_mm"=>$data['11'],
                    "height_mm"=>$data['12'],
                    "wheelbase_mm"=>$data['13'],
                    "front_track_mm"=>$data['14'],
                    "rear_track_mm"=>$data['15'],
                    "curb_weight_kg"=>$data['16'],
                    "wheel_size_r14"=>$data['17'],
                    "ground_clearance_mm"=>$data['18'],
                    "trailer_load_with_brakes_kg"=>$data['19'],
                    "payload_kg"=>$data['20'],
                    "back_track_width_mm"=>$data['21'],
                    "front_track_width_mm"=>$data['22'],
                    "clearance_mm"=>$data['23'],
                    "Npęd na wszystkie koła_weight_kg"=>$data['24'],
                    "front_rear_axle_load_kg"=>$data['25'],
                    "max_trunk_capacity_l"=>$data['26'],
                    "minimum_trunk_capacity_l"=>$data['27'],
                    "maximum_torque_n_m"=>$data['28'],
                    "injection_type"=>$data['29'],
                    "overhead_camshaft"=>$data['30'],
                    "cylinder_layout"=>$data['31'],
                    "number_of_cylinders"=>$data['32'],
                    "compression_ratio"=>$data['33'],
                    "engine_type"=>$data['34'],
                    "valves_per_cylinder"=>$data['35'],
                    "boost_type"=>$data['36'],
                    "cylinder_bore_mm"=>$data['37'],
                    "stroke_cycle_mm"=>$data['38'],
                    "engine_placement"=>$data['39'],
                    "turnover_of_maximum_torque_rpm"=>$data['40'],
                    "max_power_kw"=>$data['41'],
                    "presence_of_intercooler"=>$data['42'],
                    "capacity_cm3"=>$data['43'],
                    "engine_hp"=>$data['44'],
                    "engine_hp_rpm"=>$data['45'],
                    "drive_wheels"=>$data['46'],
                    "number_of_gears"=>$data['47'],
                    "turning_circle_m"=>$data['48'],
                    "transmission"=>$data['49'],
                    "mixed_fuel_consumption_per_100_km_l"=>$data['50'],
                    "range_km"=>$data['51'],
                    "fuel_tank_capacity_l"=>$data['52'],
                    "acceleration_0_100_km/h_s"=>$data['53'],
                    "max_speed_km_per_h"=>$data['54'],
                    "fuel_grade"=>$data['55'],
                    "back_suspension"=>$data['56'],
                    "rear_brakes"=>$data['57'],
                    "front_brakes"=>$data['58'],
                    "front_suspension"=>$data['59'],
                    "car_class"=>$data['60'],
                    "country_of_origin"=>$data['61'],
                    "number_of_doors"=>$data['62'],                                                                       
                ]);    
            }
            $firstline = false;
      }

      fclose($csvFile);
    }   
}
