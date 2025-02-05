<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessage;
use App\Models\Images;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.projects.index', ['projects' => Projects::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_fr' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_de' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,avi,wmv|max:20480',
            'categorie' => 'nullable|max:255',
            'description_fr' => 'nullable',
            'description_en' => 'nullable',
            'description_de' => 'nullable',
            'link' => 'nullable|url',
            'github_link' => 'nullable|url',
        ]);

        $input = $request->all();
        $input['image'] = $request->file('image')->store('projects/image', 'public');

        if ($request->hasFile('video')) {
            $input['video'] = $request->file('video')->store('projects/video', 'public');
        }

        $project = Projects::create($input);

        if ($images = $request->file('images')) {
            foreach ($images as $item) {
                $url = $item->store('images/project', 'public');
                $project->images()->create(['url' => $url]);
            }
        }

        if ($images_code = $request->file('images_code')) {
            foreach ($images_code as $item) {
                $url = $item->store('images/project', 'public');
                $project->images()->create(['url_code' => $url]);
            }
        }

        return redirect()->route('projects.index')->with('success', FlashMessage::success('Project', 'add'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('single-project', ['project' => Projects::findOrFail($id), 'images' => Images::where('project_id', $id)->where('url', '!=', null)->get(), 'images_code' => Images::where('project_id', $id)->where('url_code', '!=', null)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.projects.edit', ['project' => Projects::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_fr' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_de' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,avi,wmv|max:20480',
            'categorie' => 'nullable|max:255',
            'description_fr' => 'nullable',
            'description_en' => 'nullable',
            'description_de' => 'nullable',
            'link' => 'nullable|url',
            'github_link' => 'nullable|url',
        ]);

        $input = $request->all();
        $project = Projects::findOrFail($id);

        if ($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('projects/image', 'public');
        }

        if ($request->hasFile('video')) {
            $input['video'] = $request->file('video')->store('projects/video', 'public');
        }

        $project->update($input);

        if ($images = $request->file('images')) {
            foreach ($images as $item) {
                $url = $item->store('images/project', 'public');
                $project->images()->create(['url' => $url]);
            }
        }

        if ($images_code = $request->file('images_code')) {
            foreach ($images_code as $item) {
                $url = $item->store('images/project', 'public');
                $project->images()->create(['url_code' => $url]);
            }
        }

        return redirect()->back()->with('success', FlashMessage::success('Project', 'update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $project = Projects::findOrFail($id);
        $project->images()->delete();
        $project->delete();
        return redirect()->back()->with('danger', FlashMessage::danger('Project', 'delete'));
    }
    public function DestroyImage($id)
    {
        $image = Images::findOrFail($id);
        $image->delete();
        return redirect()->back()->with('danger', FlashMessage::danger('Image', 'delete'));
    }
}