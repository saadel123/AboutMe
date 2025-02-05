<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'headline_fr', 'headline_en', 'headline_de',
        'title_fr', 'title_en', 'title_de',
        'description_fr', 'description_en', 'description_de',
        'portfolio_description_fr', 'portfolio_description_en', 'portfolio_description_de',
        'certificate_description_fr', 'certificate_description_en', 'certificate_description_de',
        'location_fr', 'location_en', 'location_de',
        'diploma_fr', 'diploma_en', 'diploma_de',
        'experince_fr', 'experince_en', 'experince_de',
        'phone','email', 'fullname', 'age'
    ];
}
