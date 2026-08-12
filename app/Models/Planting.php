<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Planting extends Model
{
    protected $fillable = [
        'garden_id',
        'plant_id',
        'garden_bed_id',
        'plot_id',
        'greenhouse_id',
        'quantity',
        'date_planted',
        'expected_harvest_date',
        'status',
        'notes',
    ];

    protected $casts = [
        'date_planted' => 'date',
        'expected_harvest_date' => 'date',
    ];

    public function garden(): BelongsTo
    {
        return $this->belongsTo(Garden::class);
    }

    public function plant(): BelongsTo
    {
        return $this->belongsTo(Plant::class);
    }

    public function gardenBed(): BelongsTo
    {
        return $this->belongsTo(GardenBed::class);
    }

    public function plot(): BelongsTo
    {
        return $this->belongsTo(Plot::class);
    }

    public function greenhouse(): BelongsTo
    {
        return $this->belongsTo(Greenhouse::class);
    }

    public function journalEntries(): HasMany
    {
        return $this->hasMany(GardenJournalEntry::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(GardenTask::class);
    }

    public function harvests(): HasMany
    {
        return $this->hasMany(Harvest::class);
    }
}