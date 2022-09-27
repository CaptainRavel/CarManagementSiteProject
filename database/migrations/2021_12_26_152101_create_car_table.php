<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_bases', function (Blueprint $table) {
            $table->id();
            $table->text('model');
            $table->text('make');
            $table->bigInteger('make_id');
            $table->text('generation');
            $table->text('year_from');
            $table->text('year_to');
            $table->text('series');
            $table->text('trim');
            $table->text('body_type');
            $table->text('number_of_seats');
            $table->text('length_mm');
            $table->text('width_mm');
            $table->text('height_mm');
            $table->text('wheelbase_mm');
            $table->text('front_track_mm');
            $table->text('rear_track_mm');
            $table->text('curb_weight_kg');
            $table->text('wheel_size_r14');
            $table->text('ground_clearance_mm');
            $table->text('trailer_load_with_brakes_kg');
            $table->text('payload_kg');
            $table->text('back_track_width_mm');
            $table->text('front_track_width_mm');
            $table->text('clearance_mm');
            $table->text('Npęd na wszystkie koła_weight_kg');
            $table->text('front_rear_axle_load_kg');
            $table->text('max_trunk_capacity_l');
            $table->text('minimum_trunk_capacity_l');
            $table->text('maximum_torque_n_m');
            $table->text('injection_type');
            $table->text('overhead_camshaft');
            $table->text('cylinder_layout');
            $table->text('number_of_cylinders');
            $table->text('compression_ratio');
            $table->text('engine_type');
            $table->text('valves_per_cylinder');
            $table->text('boost_type');
            $table->text('cylinder_bore_mm');
            $table->text('stroke_cycle_mm');
            $table->text('engine_placement');
            $table->text('turnover_of_maximum_torque_rpm');
            $table->text('max_power_kw');
            $table->text('presence_of_intercooler');
            $table->text('capacity_cm3');
            $table->text('engine_hp');
            $table->text('engine_hp_rpm');
            $table->text('drive_wheels');
            $table->text('number_of_gears');
            $table->text('turning_circle_m');
            $table->text('transmission');
            $table->text('mixed_fuel_consumption_per_100_km_l');
            $table->text('range_km');
            $table->text('fuel_tank_capacity_l');
            $table->text('acceleration_0_100_km/h_s');
            $table->text('max_speed_km_per_h');
            $table->text('fuel_grade');
            $table->text('back_suspension');
            $table->text('rear_brakes');
            $table->text('front_brakes');
            $table->text('front_suspension');
            $table->text('car_class');
            $table->text('country_of_origin');
            $table->text('number_of_doors');                                     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_bases');
    }
}
