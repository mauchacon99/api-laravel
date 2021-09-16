<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{ Peoples };

class Professions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;
    /**
     * Get all of the peoples for the Professions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Peoples()
    {
        return $this->hasMany(Peoples::class);
    }
}
