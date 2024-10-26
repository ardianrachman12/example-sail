<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KartuKeluarga extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the ktp for the kartu_keluarga
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ktp(): HasMany
    {
        return $this->hasMany(Ktp::class);
    }
}
