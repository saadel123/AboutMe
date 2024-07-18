<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projects extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title_fr','description_fr','categorie','image','video','link','link_github','title_en','title_de','description_en','description_de',
    ];

    public function images()
    {
        return $this->hasMany(Images::class,'project_id');
    }
}
