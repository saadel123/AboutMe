<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id','link'
    ];
    public function project()
    {
        return $this->belongsTo(project::class, 'project_id');
    }
}
