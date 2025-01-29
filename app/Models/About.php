<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'location_fr', 'location_en', 'location_de',
        'title_fr', 'title_en', 'title_de',
        'description_fr', 'description_en', 'description_de',
        'diploma_fr', 'diploma_en', 'diploma_de',
        'experince_fr', 'experince_en', 'experince_de',
        'phone','email', 'fullname', 'age'
    ];
}
