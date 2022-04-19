<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mycvController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Resume;
use App\Models\Service;
use App\Models\Skill;

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

Route::get('/', function () {
    $listcvs = Resume::all();
    $listexps = Experience::all();
    $listedcs = Education::all();
    $listskills = Skill::all();
    $listsawrds = Award::all();
    $listservs = Service::all();
    return view('portfolio/index', [
        'listcvs' => $listcvs,
        'listexps' => $listexps,
        'listedcs' => $listedcs,
        'listskills' => $listskills,
        'listsawrds' => $listsawrds,
        'listservs' => $listservs
    ]);
});

//Route::resource('/index', mycvController::class)->only('index','update');

//Route::get('index', [mycvController::class, 'show']);

Route::get('admin', [ResumeController::class, 'index']);
Route::put('admin/{id}', 'ResumeController@update')->name('res.update');

Route::get('exp', [ExperienceController::class, 'index']);
Route::post('admin', 'ExperienceController@store');
Route::delete('exp/{id}', 'ExperienceController@destroy')->name('exp.delete');
Route::put('admins/{id}', 'ExperienceController@update')->name('exp.update');

Route::get('edc', [EducationController::class, 'index']);
Route::post('edcs', 'EducationController@store')->name('edc.add');
Route::delete('edcs/{id}', 'EducationController@destroy')->name('edc.delete');
Route::put('edcs/{id}', 'EducationController@update')->name('edc.update');

Route::get('skill', [SkillController::class, 'index']);
Route::post('skills', 'SkillController@store')->name('skill.add');
Route::delete('skills/{id}', 'SkillController@destroy')->name('skill.delete');
Route::put('skills/{id}', 'SkillController@update')->name('skill.update');

Route::get('service', [ServiceController::class, 'index']);
Route::post('servs', 'ServiceController@store')->name('serv.add');
Route::delete('servs/{id}', 'ServiceController@destroy')->name('serv.delete');
Route::put('servs/{id}', 'ServiceController@update')->name('serv.update');


//Route::resource('admin', ResumeController::class); 

/*
Route::get('cvs', 'CvController@index');
Route::get('cvs/create', 'CvController@create');
Route::post('cvs', 'CvController@store');
Route::get('cvs/{id}/edit', 'CvController@edit');
Route::put('cvs/{id}', 'CvController@update');
Route::delete('cvs/{id}', 'CvController@destroy');
*/


Route::view('/single-service', '/portfolio/single-service');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
