<?php

use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        require base_path('routes/admin.php');
    });

Route::get('/', [IndexController::class, 'index'])->name('frontend.index');
Route::get('/about', [IndexController::class, 'about'])->name('frontend.about');
Route::get('/services', [IndexController::class, 'services'])->name('frontend.services');
Route::get('/projects', [IndexController::class, 'projects'])->name('frontend.projects');
Route::get('/projects/{slug}', [IndexController::class, 'projectShow'])->name('frontend.projects.show');
Route::get('/blogs', [IndexController::class, 'blogs'])->name('frontend.blogs');
Route::get('/blogs/{slug}', [IndexController::class, 'blogShow'])->name('frontend.blogs.show');

Auth::routes();
Auth::routes(['register' => false]);

// Route::get('/dashboard/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
