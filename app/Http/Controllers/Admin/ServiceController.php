<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Service::select(['id', 'title', 'created_at'])->latest();

            return DataTables::of($query)
                ->addColumn('title_fr', fn($service) => $service->title['fr'] ?? '-')
                ->addColumn('actions', function ($service) {
                    return view('components.admin.ui.action-buttons', [
                        'editRoute' => route('admin.services.edit', $service->id),
                        'deleteRoute' => route('admin.services.destroy', $service->id),
                    ])->render();
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.services.index');
    }

    public function create()
    {
        return view('admin.services.create');
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

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Service ajouté avec succès.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
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

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->back()->with('success', 'Service modifié avec succès.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();
        return redirect()->route('admin.services.index')->with('error', 'Service supprimé avec succès.');
    }

    public function removeImage(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
            $service->image = null;
            $service->save();

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
