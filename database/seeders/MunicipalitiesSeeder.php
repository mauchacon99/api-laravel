<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MunicipalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('municipalities')->insert([
            ['name' => 'Libertad'], 
            ['name' => 'Capacho'],
            ['name' => 'Jauregui'],
            ['name' => 'Junin'],
            ['name' => 'Independencia'],
        ]);
    }
}
