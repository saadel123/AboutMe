<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'description'];
    public function projects()
    {
        return $this->belongsToMany(Projects::class)
                    ->using(CategoryProject::class)
                    ->withTimestamps();
    }
}