<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'social_media'
    ];

    protected $casts = [
        'social_media' => 'array'
    ];
}
