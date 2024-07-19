<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;
class ChangerLangController extends Controller
{
    public function index()
    {
        App::setLocale('en');
        session()->put('locale', 'en');
        return redirect('/');
    }

    public function lang_change(Request $request): RedirectResponse
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
    public function changeLang($lang)
    {
        Session::put('locale', $lang);
        return redirect()->back();
    }
}
