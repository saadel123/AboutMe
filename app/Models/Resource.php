<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'file_path',
        'file_type',
        'mime_type',
        'is_main',
    ];

    public function resourceable()
    {
        return $this->morphTo();
    }
}
