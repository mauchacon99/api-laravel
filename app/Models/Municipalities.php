<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Locations};

class Municipalities extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the locations for the Municipalities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations()
    {
        return $this->hasMany(Locations::class);
    }
}
