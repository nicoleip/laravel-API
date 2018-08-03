<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Maker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Maker::truncate();

        // $this->call(UsersTableSeeder::class);

        $this->call('MakerSeed');
        $this->call('VehiclesSeed');
    }
}
