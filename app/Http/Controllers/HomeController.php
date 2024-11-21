<?php

namespace App\Http\Controllers;

use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Projects;
use App\Models\Certificate;
use App\Models\Services;
use App\Models\Skills;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        return view('index', [
            'educations' => Educations::all(),
            'experiences' => Experiences::all(),
            'skills' => Skills::all(),
            'services' => Services::all(),
            'projects' => Projects::all(),
            'certificates' => Certificate::all(),
        ]);
    }
}