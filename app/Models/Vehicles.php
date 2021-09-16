<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Peoples, VehicleBrands, VehicleTypes};

class Vehicles extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'vehicle_types_id',
        'vehicle_brands_id',
        'year',
    ];
    public $timestamps = false;
    /**
     * Get the people that owns the Vehicles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peoples()
    {
        return $this->hasOne(Peoples::class);
    }
    /**
     * Get the brand that owns the Vehicles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicleBrands()
    {
        return $this->belongsTo(VehicleBrands::class);
    }

    /**
     * Get the Type that owns the Vehicles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicleTypes()
    {
        return $this->belongsTo(VehicleTypes::class);
    }
}
