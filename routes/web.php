<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ChangerLangController;
use App\Http\Controllers\ExperiencesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/single-project/{id}', [ProjectsController::class, 'show'])->name('single.project');

Auth::routes();

Route::get('/changeLang', [ChangerLangController::class, 'lang_change'])->name('changeLang');
Route::get('/en', [ChangerLangController::class, 'index']);
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    // Educations
    Route::resource('educations', EducationsController::class);
    // Experiences
    Route::resource('experiences', ExperiencesController::class);
    // Skills
    Route::resource('skills', SkillsController::class);
    // Services
    Route::resource('services', ServicesController::class);
    // Projects
    Route::resource('projects', ProjectsController::class);

});
