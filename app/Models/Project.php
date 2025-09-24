<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'category',
        'short_description',
        'first_image',
        'second_image',
        'slug',
        'years',
        'timeline',
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
            // slug mindig újragenerálódjon, ha a title változik
            if ($project->isDirty('title')) {
                $project->slug = Str::slug($project->title);
            }
        });
    }
}
