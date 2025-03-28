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

        if (request()->has('date')) {
            $query->whereDate('clicked_at', request('date'));
        }

        $journeys = $query->get()->groupBy('session_id');

        return view('admin.statistic.index', compact('journeys'));
    }
}
