<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SlideController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Slide::select(['id', 'title', 'order', 'is_active', 'created_at'])->latest();

            return DataTables::of($query)
                ->addColumn('title_fr', fn($slide) => $slide->title['fr'] ?? '-')
                ->addColumn('status', fn($slide) => $slide->is_active ? 'Active' : 'Inactive')
                ->addColumn('actions', function ($slide) {
                    return view('components.admin.ui.action-buttons', [
                        'editRoute' => route('admin.slides.edit', $slide->id),
                        'deleteRoute' => route('admin.slides.destroy', $slide->id),
                    ])->render();
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.slides.index');
    }

    public function create()
    {
        return view('admin.slides.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|array',
            'title.fr' => 'required|string',
            'title.en' => 'nullable|string',
            'title.ar' => 'nullable|string',

            'description' => 'nullable|array',
            'description.fr' => 'nullable|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',

            'file' => 'nullable|array',
            'file.fr' => 'nullable|file|mimes:pdf,jpeg,png,jpg,gif,mp4|max:5120',
            'file.en' => 'nullable|file|mimes:pdf,jpeg,png,jpg,gif,mp4|max:5120',
            'file.ar' => 'nullable|file|mimes:pdf,jpeg,png,jpg,gif,mp4|max:5120',

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('slides', 'public');
        }
        // Handle background upload
        if ($request->hasFile('background')) {
            $data['background'] = $request->file('background')->store('slides', 'public');
        }

        // Handle multilingual file uploads
        $fileData = [];
        foreach (config('languages.available') as $lang) {
            if ($request->hasFile("file.$lang")) {
                $fileData[$lang] = $request->file("file.$lang")->store("slides/files", "public");
            }
        }
        $data['file'] = $fileData;

        Slide::create($data);

        return redirect()->route('admin.slides.index')->with('success', 'Slide ajouté avec succès.');
    }


    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
    {
        $data = $request->validate([
            'title' => 'required|array',
            'title.fr' => 'required|string',
            'title.en' => 'nullable|string',
            'title.ar' => 'nullable|string',

            'description' => 'nullable|array',
            'description.fr' => 'nullable|string',
            'description.en' => 'nullable|string',
            'description.ar' => 'nullable|string',

            'file' => 'nullable|array',
            'file.fr' => 'nullable|file|mimes:pdf,jpeg,png,jpg,gif,mp4|max:5120',
            'file.en' => 'nullable|file|mimes:pdf,jpeg,png,jpg,gif,mp4|max:5120',
            'file.ar' => 'nullable|file|mimes:pdf,jpeg,png,jpg,gif,mp4|max:5120',

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($slide->image) {
                Storage::disk('public')->delete($slide->image);
            }
            $data['image'] = $request->file('image')->store('slides', 'public');
        }
        // Handle background upload
        if ($request->hasFile('background')) {
            if ($slide->background) {
                Storage::disk('public')->delete($slide->background);
            }
            $data['background'] = $request->file('background')->store('slides', 'public');
        }

        // Handle multilingual file uploads and delete old files if replaced
        $fileData = $slide->file ?? [];
        foreach (config('languages.available') as $lang) {
            if ($request->hasFile("file.$lang")) {
                // Delete old file if exists
                if (!empty($fileData[$lang])) {
                    Storage::disk('public')->delete($fileData[$lang]);
                }
                // Store new file
                $fileData[$lang] = $request->file("file.$lang")->store("slides/files", "public");
            }
        }
        $data['file'] = $fileData;

        $data['file'] = $fileData;

        $slide->update($data);

        return redirect()->back()->with('success', 'Slide modifié avec succès.');
    }


    public function destroy(Slide $slide)
    {
        if ($slide->image) {
            Storage::disk('public')->delete($slide->image);
        }

        $slide->delete();
        return redirect()->route('admin.slides.index')->with('error', 'Slide supprimé avec succès.');
    }

    public function removeImage(Slide $slide)
    {
        if ($slide->image) {
            Storage::disk('public')->delete($slide->image);
            $slide->image = null;
            $slide->save();

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

    public function deleteFile(Request $request)
    {
        $request->validate([
            'file_path' => 'required|string',
            'lang' => 'required|string|in:fr,en,ar',
            'id_in_table' => 'required|integer|exists:slides,id',
        ]);

        $slide = Slide::findOrFail($request->id_in_table);
        $fileData = $slide->file ?? [];

        // Check if the file exists in the specified language
        if (isset($fileData[$request->lang]) && $fileData[$request->lang] === $request->file_path) {
            // Delete the file from storage
            if (Storage::disk('public')->exists($request->file_path)) {
                Storage::disk('public')->delete($request->file_path);
            }

            // Remove the file from the array
            unset($fileData[$request->lang]);

            // Update the slide
            $slide->file = $fileData;
            $slide->save();

            return response()->json(['success' => true]);
        }

        return response()->json([
            'success' => false,
            'message' => 'File not found or already deleted'
        ], 404);
    }
}
