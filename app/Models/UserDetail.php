<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDetail extends Model
{
    use HasFactory;

    /**
     * User detail address belongs to village
     * for services location.
     */
    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class);
    }

    /**
     * Village belongs to district.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
