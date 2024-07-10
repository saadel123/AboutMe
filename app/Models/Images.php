<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'project_id','url','url_code'
    ];
    public function project(){
        return  $this->belongsTo(Projects::class,'project_id');
    }
}
