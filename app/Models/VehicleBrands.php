<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{ Vehicles };
class VehicleBrands extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];
    /**
     * Get all of the vehicles for the VehicleBrands
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicles()
    {
        return $this->hasMany(Vehicles::class, 'vehicle_brands_id'  );
    }
}
