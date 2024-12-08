<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use Sluggable, HasFactory;
    
    protected $with = [
        'author',
        'tag'
    ];
    
    protected $fillable = [
        'title',
        'slug',
        'first_name',
        'last_name',
        'content',
        'tag',
        'time'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
