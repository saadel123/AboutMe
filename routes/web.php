<?php

use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ChangerLangController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Artisan;



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
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage link has been created successfully!';
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/single-project/{id}', [ProjectsController::class, 'show'])->name('single.project');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

Auth::routes(['register' => false]);


// Route::get('/changeLang', [ChangerLangController::class, 'lang_change'])->name('changeLang');
Route::get('/change-language/{lang}', [ChangerLangController::class, 'changeLang'])->name('changeLang');

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
    // contacts
    Route::resource('contacts', ContactController::class);
    // certificates
    Route::resource('certificates', CertificateController::class);
    Route::get('images/destroy/{id}', [ProjectsController::class , 'DestroyImage'])->name('image.destroy');

});