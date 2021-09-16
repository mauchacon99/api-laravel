<?php

namespace Database\Seeders;

use App\Models\{Locations, Peoples, Professions, Vehicles};
 
use Illuminate\Database\Seeder;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location   = Locations::find(1);
        $vehicles   = Vehicles::find(1);
        $profession = Professions::find(1);
        
        $peoples = Peoples::create([
            'first_name' => 'Carlos Mauricio',
            'last_name' => 'Chacon Leon',
            'DNI'       => '26832009',
            'birthdate' => now(),
            'phone'     => 4247005777,
            'sex'       => 'man',
            'locations_id'   => $location->id,
            'vehicles_id'    => $vehicles->id,
            'professions_id' => $profession->id
        ]);
        
    }
}
