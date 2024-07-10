<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experiences extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title_fr','title_en','title_de', 'lieu_fr','lieu_en','lieu_de','description_fr','description_en','description_de', 'datedebut', 'datefin'];
}
