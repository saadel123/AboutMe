<?php

namespace App\Http\Controllers;

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
        return view('admin.projects.index',['projects'=>Projects::orderBy('created_at','desc')->get()]);
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
        $input = $request->all();
        if($request->hasFile('image')){
            $input['image']=$request->image->store('projects/image', 'public');
        }
        if ($request->has('video')) {
            $input['video'] = $request->video->store('projects/video', 'public');
        }
        $project = Projects::create($input);
        if ($images = $request->file('images')) {
            foreach ($images as  $item) {
                $url = $item->store('images/project', 'public');
                $project->images()->create([
                    'url' => $url,
                ]);
            }
        }
        if ($images_code = $request->file('images_code')) {
            foreach ($images_code as  $item) {
                $url = $item->store('images/project', 'public');
                $project->images()->create([
                    'url_code' => $url,
                ]);
            }
        }
        return redirect()->route('projects.index')->with('success', 'le contenu a été bien enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('single-project',['project'=>Projects::findOrFail($id),'images'=> Images::where('project_id',$id)->where('url','!=',null)->get(),'images_code'=> Images::where('project_id',$id)->where('url_code','!=',null)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.projects.edit',['project'=>Projects::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        if($request->hasFile('image')){
            $input['image']=$request->image->store('projects/image', 'public');
        }
        if ($request->has('video')) {
            $input['video'] = $request->video->store('projects/video', 'public');
        }
        $project = Projects::findOrFail($id);
        $project->update($input);
        if ($images = $request->file('images')) {
            foreach ($images as  $item) {
                $url = $item->store('images/project', 'public');
                $project->images()->create([
                    'url' => $url,
                ]);
            }
        }
        if ($images_code = $request->file('images_code')) {
            foreach ($images_code as  $item) {
                $url = $item->store('images/project', 'public');
                $project->images()->create([
                    'url_code' => $url,
                ]);
            }
        }
        return redirect()->back()->with('success', 'le contenu a été bien enregistré');
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
        return redirect()->back()->with('success', 'le contenu a été bien enregistré');
    }
    public function DestroyImage($id)
    {
        $image = Images::findOrFail($id);
        $image->delete();
        return redirect()->back()->with('success', 'le contenu a été bien enregistré');
    }
}