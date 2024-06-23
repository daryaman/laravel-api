<?php

namespace App\Models;

use App\Models\Regency;
use App\Models\Village;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';


     /**
     * District has many village.
     */
    public function villages(): HasMany
    {
        return $this->hasMany(Village::class);
    }

    /**
     * District belongs to regency.
     */
    public function regency(): BelongsTo
    {
        return $this->belongsTo(Regency::class);
    }
}
