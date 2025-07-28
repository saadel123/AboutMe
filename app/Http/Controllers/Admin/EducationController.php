<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class EducationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Education::select(['id', 'title', 'lieu', 'start_date', 'end_date', 'created_at'])->latest();

            return DataTables::of($query)
                ->addColumn('title_fr', function ($education) {
                    return $education->title['fr'] ?? '-';
                })
                ->addColumn('lieu_fr', function ($education) {
                    return $education->lieu['fr'] ?? '-';
                })
                ->addColumn('actions', function ($education) {
                    return view('components.admin.ui.action-buttons', [
                        'editRoute' => route('admin.educations.edit', $education->id),
                        'deleteRoute' => route('admin.educations.destroy', $education->id),
                    ])->render();
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.educations.index');
    }

    public function create()
    {
        return view('admin.educations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|array',
            'title.fr' => 'required|string',
            'title.en' => 'nullable|string',
            'title.ar' => 'nullable|string',

            'lieu' => 'required|array',
            'lieu.fr' => 'required|string',
            'lieu.en' => 'nullable|string',
            'lieu.ar' => 'nullable|string',

            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        Education::create($data);

        return redirect()->route('admin.educations.index')->with('success', 'Éducation ajoutée avec succès.');
    }

    public function edit(Education $education)
    {
        return view('admin.educations.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'title' => 'required|array',
            'title.fr' => 'required|string',
            'title.en' => 'nullable|string',
            'title.ar' => 'nullable|string',

            'lieu' => 'required|array',
            'lieu.fr' => 'required|string',
            'lieu.en' => 'nullable|string',
            'lieu.ar' => 'nullable|string',

            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $education->update($data);

        return redirect()->back()->with('success', 'Éducation modifiée avec succès.');
    }

    public function destroy(Education $education)
    {
        if ($education->image) {
            Storage::disk('public')->delete($education->image);
        }
        $education->delete();
        return redirect()->route('admin.educations.index')->with('error', 'Éducation supprimée avec succès.');
    }
    public function removeImage(Education $education)
    {
        if ($education->image) {
            Storage::disk('public')->delete($education->image);
            $education->image = null;
            $education->save();

            return response()->json([
                'success' => true,
                'message' => "L'image principale a été supprimée avec succès."
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => "Aucune image trouvée à supprimer."
        ], 404);
    }
}
