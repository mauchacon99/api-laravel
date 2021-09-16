<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{VehicleBrands, VehicleTypes, Vehicles};

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $VehicleBrands =  VehicleBrands::find(1);
        $VehicleTypes  =  VehicleTypes::find(1);
      
        Vehicles::create([
            'vehicle_types_id'  => $VehicleTypes->id,
            'vehicle_brands_id' => $VehicleBrands->id,
            'year' => 2001
        ]);
    }
}
