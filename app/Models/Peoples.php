<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Locations, Professions, Vehicles};

class Peoples extends Model
{
    use HasFactory;

    protected $fillable = [
        'fist_name',
        'last_name',
        'DNI',
        'birthdate',
        'phone',
        'sex',
        'locations_id',
        'vehicles_id',
        'professions_id'
    ];

    public $timestamps = false;
    /**
     * Get the Location that owns the Peoples
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Locations()
    {
        return $this->belongsTo(Locations::class);
    }

    /**
     * Get the Profession that owns the Peoples
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Professions() 
    {
        return $this->belongsTo(Professions::class);
    }

    /**
     * Get the Vehicle associated with the Peoples
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Vehicles()
    {
        return $this->belongsTo(Vehicles::class);
    }
}
