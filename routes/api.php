<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/data', function () {
    return response()->json(['message' => 'API is working']);
});

