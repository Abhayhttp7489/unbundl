<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'model',
        'type',
        'description',
        'image',
        'price',
        'min_price',
        'max_price',
        'launch_date',
        'fuel_type',
        'seating_capacity',
        'is_most_searched',
        'is_latest',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'min_price' => 'decimal:2',
        'max_price' => 'decimal:2',
        'launch_date' => 'date',
        'is_most_searched' => 'boolean',
        'is_latest' => 'boolean',
        'is_active' => 'boolean',
        'seating_capacity' => 'integer',
    ];

    public static function getMostSearched()
    {
        return static::where('is_most_searched', true)
            ->where('is_active', true)
            ->latest()
            ->take(8)
            ->get();
    }

    public static function getLatest()
    {
        return static::where('is_latest', true)
            ->where('is_active', true)
            ->latest()
            ->take(8)
            ->get();
    }
}

