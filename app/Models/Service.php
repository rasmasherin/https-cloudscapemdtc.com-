<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'icon',
        'features',
        'display_order',
    ];

    // Cast features as array
    protected $casts = [
        'features' => 'array',
    ];
}
