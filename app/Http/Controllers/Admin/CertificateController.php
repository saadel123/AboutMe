<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Certificate::select(['id', 'title', 'created_at'])->latest();

            return DataTables::of($query)
                ->addColumn('title_fr', fn($certificate) => $certificate->title['fr'] ?? '-')
                ->addColumn('actions', function ($certificate) {
                    return view('components.admin.ui.action-buttons', [
                        'editRoute' => route('admin.certificates.edit', $certificate->id),
                        'deleteRoute' => route('admin.certificates.destroy', $certificate->id),
                    ])->render();
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.certificates.index');
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|array',
            'title.fr' => 'required|string',
            'title.en' => 'nullable|string',
            'title.ar' => 'nullable|string',

            'description' => 'required|array',
            'description.fr' => 'required|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',

            'link' => 'nullable|url',

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('certificates', 'public');
        }

        Certificate::create($data);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate ajouté avec succès.');
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $data = $request->validate([
            'title' => 'required|array',
            'title.fr' => 'required|string',
            'title.en' => 'nullable|string',
            'title.ar' => 'nullable|string',

            'description' => 'required|array',
            'description.fr' => 'required|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',

            'link' => 'nullable|url',

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        if ($request->hasFile('image')) {
            if ($certificate->image) {
                Storage::disk('public')->delete($certificate->image);
            }
            $data['image'] = $request->file('image')->store('certificates', 'public');
        }

        $certificate->update($data);

        return redirect()->back()->with('success', 'Certificate modifié avec succès.');
    }

    public function destroy(Certificate $certificate)
    {
        if ($certificate->image) {
            Storage::disk('public')->delete($certificate->image);
        }

        $certificate->delete();
        return redirect()->route('admin.certificates.index')->with('error', 'Certificate supprimé avec succès.');
    }

    public function removeImage(Certificate $certificate)
    {
        if ($certificate->image) {
            Storage::disk('public')->delete($certificate->image);
            $certificate->image = null;
            $certificate->save();

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
