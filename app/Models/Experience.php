<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title','position', 'lieu','description', 'start_date', 'end_date'];
        protected $casts = [
        'title' => 'array',
        'position' => 'array',
        'lieu' => 'array',
        'description' => 'array',
    ];
}
