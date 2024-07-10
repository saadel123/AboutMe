<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title_fr', 'icon','title_en','title_de','description_en','description_fr','description_de'];
}
