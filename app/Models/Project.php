<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'image',
        'video',
        'link',
        'github_link'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];

    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)
            ->using(CategoryProject::class)
            ->withTimestamps();
    }
}
