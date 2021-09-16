<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProfessionsSeeder::class);
        $this->call(MunicipalitiesSeeder::class);
        $this->call(VehicleTypesSeeder::class);
        $this->call(VehicleBrandsSeeder::class);
        $this->call(VehiclesSeeder::class);
        $this->call(LocationsSeeder::class);
        $this->call(PeoplesSeeder::class);

    }
}
