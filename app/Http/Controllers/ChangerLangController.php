<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;
use App\Models\Statistic;

class ChangerLangController extends Controller
{
    public function setLanguageFromUrl($lang)
    {
        Session::put('locale', $lang);
        App::setLocale($lang);

        // Track the homepage view in statistics
        $this->trackHomepageView($lang);

        return redirect('/');
    }

    public function changeLang($lang)
    {
        Session::put('locale', $lang);
        App::setLocale($lang);
        return redirect()->back();
    }

    protected function trackHomepageView($lang = null)
    {
        $sessionId = session()->get('user_session_id');
        $pageIdentifier = 'homepage_' . ($lang ?? 'default');

        if (!session()->has("viewed_page_{$pageIdentifier}")) {
            try {
                Statistic::create([
                    'session_id' => $sessionId,
                    'page_url' => '/' . ($lang ?? ''),
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

    public function trackResumeAndSetGerman()
    {
        Session::put('locale', 'de');
        App::setLocale('de');

        // Track the resume link click
        $this->trackResumeLinkView();

        return redirect('/');
    }

    protected function trackResumeLinkView()
    {
        $sessionId = session()->get('user_session_id');
        $pageIdentifier = 'resume_link_gm';

        if (!session()->has("viewed_page_{$pageIdentifier}")) {
            try {
                Statistic::create([
                    'session_id' => $sessionId,
                    'page_url' => '/gm',
                    'page_title' => 'Homepage (CV)',
                    'is_resume_click' => true,
                    'language' => 'de',
                    'clicked_at' => now()
                ]);
                session()->put("viewed_page_{$pageIdentifier}", true);
            } catch (\Illuminate\Database\QueryException $e) {
                \Log::warning("Duplicate resume link tracking - Session: {$sessionId}");
            }
        }
    }
}