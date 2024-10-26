<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ktp extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the kartu_keluarga that owns the Ktp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kartu_keluarga(): BelongsTo
    {
        return $this->belongsTo(KartuKeluarga::class, 'kartu_keluarga_id');
    }
}
