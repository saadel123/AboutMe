<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $projects = Project::latest()->limit(2)->get();
        $services = Service::latest()->limit(4)->get();
        $experiences = Experience::all();

        return view('frontend.index', [
            'skills'     => $skills,
            'projects'   => $projects,
            'services'   => $services,
            'experiences' => $experiences,
        ]);
    }
    public function about()
    {
        $settings = Setting::first();
        $skills = Skill::all();

        return view('frontend.about', [
            'settings'   => $settings,
            'skills'     => $skills,
        ]);
    }
    public function services()
    {
        $services = Service::all();

        return view('frontend.services', [
            'services'   => $services,
        ]);
    }
    public function projects(Request $request)
    {
        // Get all categories with their projects
        $categories = Category::with(['projects' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->get();
        // Get all projects ordered by creation date
        $allProjects = Project::orderBy('created_at', 'desc')->get();

        return view('frontend.projects.index', compact('categories', 'allProjects'));
    }

    public function blogs(Request $request)
    {
        $query = Blog::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $locale = app()->getLocale();

            $query->where(function ($q) use ($search, $locale) {
                $q->where("title->{$locale}", 'like', "%{$search}%")
                    ->orWhere("content->{$locale}", 'like', "%{$search}%");
            });
        }

        $blogs = $query->latest()->paginate(9);

        return view('frontend.blogs.index', compact('blogs'));
    }
    public function projectShow($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        // Get category IDs of current project
        $categoryIds = $project->categories()->pluck('categories.id')->toArray();

        // Fetch related projects that share at least one category
        $relatedProjects = Project::where('id', '!=', $project->id)
            ->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('categories.id', $categoryIds);
            })
            ->latest()
            ->limit(3)
            ->get();

        return view('frontend.projects.show', compact('project', 'relatedProjects'));
    }


    public function blogShow($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('frontend.blogs.show', compact('blog'));
    }
}
