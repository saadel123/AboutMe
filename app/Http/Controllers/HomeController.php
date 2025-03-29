<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Projects;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Services;
use App\Models\Skills;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


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
        return view('home', [
            'aboutCount' => About::count(),
            'educationCount' => Educations::count(),
            'experienceCount' => Experiences::count(),
            'skillCount' => Skills::count(),
            'serviceCount' => Services::count(),
            'projectCount' => Projects::count(),
            'certificateCount' => Certificate::count(),
            'categoryCount' => Category::count(),
            'contactCount' => Contact::count(),
        ]);
    }


    public function index()
    {
        // Statistics tracking
        $this->trackHomepageView(app()->getLocale());


        $locale = app()->getLocale();
        $cacheKey = "portfolio_data_{$locale}_v1";

        $data = Cache::remember($cacheKey, now()->addHours(12), function () use ($locale) {
            return [
                'educations' => Educations::select(['id', "title_$locale", 'datedebut', 'datefin'])
                    ->orderBy('datedebut', 'desc')
                    ->get(),

                'experiences' => Experiences::select(['id', "title_$locale", 'datedebut', 'datefin', "description_$locale"])
                    ->orderBy('datedebut', 'desc')
                    ->get(),

                'skills' => Skills::select(['language', 'percent'])
                    ->orderBy('percent', 'desc')
                    ->get(),

                'projects' => Projects::with(['categories:id,name'])
                    ->select(['id', 'image', "title_$locale"])
                    ->get(),

                'certificates' => Certificate::select(['id', 'image', "title_$locale", 'link'])
                    ->get(),

                'about' => About::select([
                    'fullname',
                    "headline_$locale",
                    "description_$locale",
                    "title_$locale",
                    "experince_$locale",
                    "diploma_$locale",
                    'age',
                    "location_$locale",
                    'email',
                    "portfolio_description_$locale",
                    "certificate_description_$locale"
                ])->first(),

                'categories' => Category::has('projects')
                    ->select(['id', 'name'])
                    ->get(),
            ];
        });

        return view('index', array_merge(['locale' => $locale], $data));
    }

    protected function trackHomepageView($lang = null)
    {
        $sessionId = session()->get('user_session_id');
        $pageIdentifier = 'homepage_' . ($lang ?? 'default');

        if (!session()->has("viewed_page_{$pageIdentifier}")) {
            try {
                Statistic::create([
                    'session_id' => $sessionId,
                    'page_url' => '/',
                    'page_title' => 'Homepage (' . strtoupper($lang ?? 'en') . ')',
                    'language' => $lang ?? 'en',
                    'clicked_at' => now()
                ]);
                session()->put("viewed_page_{$pageIdentifier}", true);
            } catch (\Illuminate\Database\QueryException $e) {
                \Log::warning("Duplicate homepage tracking - Session: {$sessionId}");
            }
        }
    }

}