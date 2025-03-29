<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $table = 'statistics';

    protected $fillable = [
        'session_id',
        'page_url',
        'project_id',
        'clicked_at',
        'page_title',
        'language',
        'is_resume_click'
    ];

    protected $dates = [
        'clicked_at'
    ];
}
