<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehicleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vehicle_types')->insert([
            ['name' => 'Moto'], 
            ['name' => 'Camioneta'],
            ['name' => 'Automovil'],
            ['name' => 'Autobus'],
            ['name' => 'Camion'],
            ['name' => 'Bicicleta'],
        ]);
    }
}
