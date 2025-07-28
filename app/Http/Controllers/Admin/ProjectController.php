<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Category;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Project::select(['id', 'created_at', 'title'])->latest();

            return DataTables::of($query)
                ->addColumn('title_fr', function ($project) {
                    return $project->title['fr'] ?? '-';
                })
                ->addColumn('date', function ($project) {
                    return $project->created_at->format('Y-m-d');
                })
                ->addColumn('actions', function ($project) {
                    return view('components.admin.ui.action-buttons', [
                        'editRoute' => route('admin.projects.edit', $project->id),
                        'deleteRoute' => route('admin.projects.destroy', $project->id),
                    ])->render();
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.projects.index');
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.projects.create', compact('categories'));
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
            'github_link' => 'nullable|url',
            'video' => 'nullable|url',

            'files.*' => 'file|mimes:jpg,jpeg,png,gif,mp4,pdf|max:10240',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        // Slug generation
        $count = 1;
        $slug = Str::slug($data['title']['fr'], '-', 'fr');
        while (Project::where('slug', $slug)->exists()) {
            $slug = Str::slug($data['title']['fr'], '-', 'fr') . '-' . $count;
            $count++;
        }
        $data['slug'] = $slug;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Projects', 'public');
            $data['image'] = $imagePath;
        }

        // Create Project
        $project = Project::create($data);
        $project->categories()->sync($request->input('categories', []));
        // Handle file uploads
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $index => $file) {
                $path = $file->store('uploads/resources', 'public');

                $project->resources()->create([
                    'file_path' => $path,
                    'file_type' => $file->getClientOriginalExtension(),
                    'mime_type' => $file->getMimeType(),
                    'is_main' => $index === 0,
                ]);
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project ajouté avec succès.');
    }

    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
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
            'github_link' => 'nullable|url',
            'video' => 'nullable|url',

            'files.*' => 'file|mimes:jpg,jpeg,png,gif,mp4,pdf|max:10240',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        // Slug generation
        $count = 1;
        $slug = Str::slug($data['title']['fr'], '-', 'fr');
        while (Project::where('slug', $slug)->where('id', '!=', $project->id)->exists()) {
            $slug = Str::slug($data['title']['fr'], '-', 'fr') . '-' . $count;
            $count++;
        }
        $data['slug'] = $slug;

        // Handle image update
        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }

            $imagePath = $request->file('image')->store('Projects', 'public');
            $data['image'] = $imagePath;
        }

        // Update Project
        $project->update($data);
        $project->categories()->sync($request->input('categories', []));

        // Handle new file uploads
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $index => $file) {
                $path = $file->store('uploads/resources', 'public');

                $project->resources()->create([
                    'file_path' => $path,
                    'file_type' => $file->getClientOriginalExtension(),
                    'mime_type' => $file->getMimeType(),
                    'is_main' => $project->resources()->count() === 0 && $index === 0,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Project modifié avec succès.');
    }


    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();
        return redirect()->route('admin.projects.index')->with('error', 'Project supprimé avec succès.');
    }
   
    public function removeImage(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
            $project->image = null;
            $project->save();

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
