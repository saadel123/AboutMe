<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryProject extends Pivot
{
    protected $table = 'category_project';

    protected $fillable = ['project_id', 'category_id', 'created_at', 'updated_at'];

    public $timestamps = true;
}