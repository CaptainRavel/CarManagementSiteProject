<?php

namespace Database\Seeders;

use App\Models\CarMakes;
use Illuminate\Database\Seeder;

class CarMakesSeeder extends Seeder
{
    public function run()
    {
        CarMakes::truncate();
  
        $csvFile = fopen(base_path("database/data/car_makes.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 55550000, ",")) !== FALSE) {
            if (!$firstline) {
                CarMakes::create([
                    "make"=>$data['0'],                                                                 
                ]);    
            }
            $firstline = false;
      }

      fclose($csvFile);
    } 
}
