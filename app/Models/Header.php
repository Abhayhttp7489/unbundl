<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'menu_items',
        'phone_number',
        'email',
        'is_active',
    ];

    protected $casts = [
        'menu_items' => 'array',
        'is_active' => 'boolean',
    ];

    public static function getActive()
    {
        return static::where('is_active', true)->first();
    }
}

