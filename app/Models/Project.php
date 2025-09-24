<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'url',
        'category',
        'timeline',
        'short_description',
        'options',
        'image',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug) && !empty($project->title)) {
                $project->slug = Str::slug($project->title);
            }
        });

        static::updating(function ($project) {
            if (empty($project->slug) && !empty($project->title)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }
}
