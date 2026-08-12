<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plot extends Model
{
    protected $fillable = [
        'garden_id',
        'name',
        'description',
        'length',
        'width',
    ];

    public function garden(): BelongsTo
    {
        return $this->belongsTo(Garden::class);
    }

    public function plantings(): HasMany
    {
        return $this->hasMany(Planting::class);
    }
}

