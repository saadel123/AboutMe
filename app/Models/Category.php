<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'categories';

    protected $fillable = ['title', 'description'];
    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];
    public function projects()
    {
        return $this->belongsToMany(Project::class)
            ->using(CategoryProject::class)
            ->withTimestamps();
    }
}
