<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return 'Admin Dashboard Works!';
// })->name('dashboard');

Route::middleware(['auth', 'is_admin'])->group(callback: function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('blogs', BlogController::class);
    Route::delete('/blogs/{blog}/remove-image', [BlogController::class, 'removeImage'])->name('blogs.removeImage');
    //projects
    Route::resource('projects', ProjectController::class);
    Route::delete('/projects/{project}/remove-image', [ProjectController::class, 'removeImage'])->name('projects.removeImage');
    //educations
    Route::resource('educations', EducationController::class);
    Route::delete('/educations/{education}/remove-image', [EducationController::class, 'removeImage'])->name('educations.removeImage');
    //experiences
    Route::resource('experiences', ExperienceController::class);
    Route::delete('/experiences/{experience}/remove-image', [ExperienceController::class, 'removeImage'])->name('experiences.removeImage');
    //skills
    Route::resource('skills', SkillController::class);
    Route::delete('/skills/{skill}/remove-image', [SkillController::class, 'removeImage'])->name('skills.removeImage');
    //services
    Route::resource('services', ServiceController::class);
    Route::delete('/services/{service}/remove-image', [ServiceController::class, 'removeImage'])->name('services.removeImage');
    //certificates
    Route::resource('certificates', CertificateController::class);
    Route::delete('/certificates/{certificate}/remove-image', [CertificateController::class, 'removeImage'])->name('certificates.removeImage');
    //categories
    Route::resource('categories', CategoryController::class);
    Route::delete('/categories/{category}/remove-image', [CategoryController::class, 'removeImage'])->name('categories.removeImage');
    //slides
    Route::resource('slides', SlideController::class);
    Route::delete('/slides/{slide}/remove-image', [SlideController::class, 'removeImage'])->name('slides.removeImage');
    Route::post('/slides/delete-file', [SlideController::class, 'deleteFile'])->name('slides.deletefile');
    //destroy resources
    Route::delete('/resources/destroy/{id}', [ResourceController::class, 'destroy'])->name('resources.destroy');
    //settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
    Route::resource('users', UserController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('resources', ResourceController::class);
});
