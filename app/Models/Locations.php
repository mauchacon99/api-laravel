<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Peoples};

class Locations extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $casts = [
        'created' => 'datetime',
    ];
    protected $fillable = [
        'address',
        'municipalities_id'
    ];
    
    /**
     * Get all of the Peoples for the Locations
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Peoples()
    {
        return $this->hasOne(Peoples::class,);
    }
    /**
     * Get the municipalities associated with the Locations
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Municipalities()
    {
        return $this->belongsTo(Municipalities::class);
    }
}
