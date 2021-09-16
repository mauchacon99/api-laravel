<?php

namespace Database\Seeders;

 use App\Models\{Municipalities, Locations};
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipality =  Municipalities::find(1);
        
        Locations::create([
            'address' => 'Mercado de Leones',
            'municipalities_id' => $municipality->id
        ]);
    }
}
