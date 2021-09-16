<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehicleBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vehicle_brands')->insert([
            ['name' => 'Ford'], 
            ['name' => 'Suzuki'],
            ['name' => 'Chevrolet'],
            ['name' => 'Mazda'],
            ['name' => 'Empire'],
        ]);
    }
}
