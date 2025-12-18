<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_text',
        'logo',
        'heading',
        'subheading',
        'top_info_items',
        'about_links',
        'connect_links',
        'others_links',
        'app_store_url',
        'google_play_url',
        'group_ventures',
        'quick_links',
        'social_links',
        'address',
        'phone',
        'email',
        'copyright_text',
        'is_active',
    ];

    protected $casts = [
        'top_info_items' => 'array',
        'about_links' => 'array',
        'connect_links' => 'array',
        'others_links' => 'array',
        'group_ventures' => 'array',
        'quick_links' => 'array',
        'social_links' => 'array',
        'is_active' => 'boolean',
    ];

    public static function getActive()
    {
        return static::where('is_active', true)->first();
    }
}

