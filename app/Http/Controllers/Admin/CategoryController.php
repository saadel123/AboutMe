<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Category::select(['id', 'title', 'created_at'])->latest();

            return DataTables::of($query)
                ->addColumn('title_fr', function ($category) {
                    return $category->title['fr'] ?? '-';
                })
                ->addColumn('actions', function ($category) {
                    return view('components.admin.ui.action-buttons', [
                        'editRoute' => route('admin.categories.edit', $category->id),
                        'deleteRoute' => route('admin.categories.destroy', $category->id),
                    ])->render();
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.categories.index');
    }

    public function create()
    {
        return view('admin.categories.create');
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
        ]);

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category ajoutée avec succès.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
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
        ]);

        $category->update($data);

        return redirect()->back()->with('success', 'Category modifiée avec succès.');
    }

    public function destroy(Category $category)
    {
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }
        $category->delete();
        return redirect()->route('admin.categories.index')->with('error', 'Category supprimée avec succès.');
    }

    public function removeImage(Category $category)
    {
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
            $category->image = null;
            $category->save();

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
