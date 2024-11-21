<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title_fr', 'title_en', 'title_de', 'description_fr', 'description_en', 'description_de', 'image', 'link',
    ];
}
