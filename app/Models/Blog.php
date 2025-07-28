<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'content', 'slug','image','date'];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
        'image' => 'string',
    ];

    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }

}
