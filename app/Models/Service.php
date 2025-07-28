<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'services';

    protected $fillable = ['title', 'image', 'description'];
    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];
}
