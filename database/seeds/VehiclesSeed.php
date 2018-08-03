<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Vehicle;

use Faker\Factory as Faker;

class VehiclesSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()    {

        $faker = Faker::create();

        for($i=0; $i<5; $i++){

        Vehicle::create
        ([
            
            'color' => $faker->safeColorName(),
            'power' => $faker->randomNumber(),
            'capacity' => $faker->randomFloat(3, 0, 1000),
            'speed' => $faker->randomFloat(3, 0, 1000),
            'maker_id' => $faker->numberBetween(1,5)
        ]);

        }
    }
}