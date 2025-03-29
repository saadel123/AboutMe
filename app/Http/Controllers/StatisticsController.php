<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    //
    public function index()
    {
        $query = Statistic::orderBy('clicked_at', 'desc');

        if (request('date')) {
            $query->whereDate('clicked_at', request('date'));
        }

        if (request('language')) {
            $query->where('language', request('language'));
        }

        if (request('filter') == 'resume') {
            $query->where('is_resume_click', true);
        }

        $journeys = $query->get()->groupBy('session_id');

        return view('admin.statistic.index', compact('journeys'));
    }

    public function destroy($sessionId)
    {
        Statistic::where('session_id', $sessionId)->delete();

        return redirect()->route('statistic')
            ->with('success', 'Statistics for session deleted successfully');
    }
}
