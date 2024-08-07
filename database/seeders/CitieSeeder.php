<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(path:'database/json/cities.json');
        $cities = collect(json_decode($json));

        $cities->each(function($citie){
          user::create([
            'city_name' => $cities->city_name,
        


          ]);

        });
    }
}
