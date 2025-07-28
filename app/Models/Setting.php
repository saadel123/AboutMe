<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['data'];
    protected $casts = ['data' => 'array'];
    
    public static function get($key = null, $default = null)
    {
        $settings = self::first();
        if (is_null($key)) {
            return $settings->data ?? [];
        }
        return data_get($settings->data ?? [], $key, $default);
    }
}