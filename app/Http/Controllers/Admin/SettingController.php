<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::firstOrCreate([], ['data' => []]);
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = Setting::firstOrCreate([], ['data' => []]);
        
        // Convert flat request data to nested array structure
        $data = [];
        foreach ($request->except('_token', '_method') as $key => $value) {
            if (str_contains($key, '.')) {
                data_set($data, $key, $value);
            } else {
                $data[$key] = $value;
            }
        }

        $settings->update(['data' => $data]);
        
        return back()->with('success', 'Settings updated successfully');
    }
}