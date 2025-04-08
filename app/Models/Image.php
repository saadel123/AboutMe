<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'images';

    protected $fillable = [
        'project_id','url','url_code'
    ];
    public function project(){
        return  $this->belongsTo(Project::class,'project_id');
    }
}
