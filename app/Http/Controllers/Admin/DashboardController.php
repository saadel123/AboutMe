<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'educationCount' => Education::count(),
            'experienceCount' => Experience::count(),
            'skillCount' => Skill::count(),
            'serviceCount' => Service::count(),
            'projectCount' => Project::count(),
            'certificateCount' => Certificate::count(),
            'categoryCount' => Category::count(),
            'contactCount' => Contact::count(),
        ]);
    }
}
