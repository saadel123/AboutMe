<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class projectcontroller extends Controller
{
    // public function __construct()
    // {
    //     $this->Middleware('auth');
    //     return redirect('auth')->with('msg', 'svp connecter pour consulter les cv!!');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listproject = project::all();
        return view('portfolio/projects', [
            'listproject' => $listproject,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('images', 'public');
        }
        $project = project::create($input);
        if ($project_images = $request->file('images')) {
            foreach ($project_images as  $image) {
                $path = $image->store('images/projects', 'public');
                $project->images()->create([
                    'link' => $path
                ]);
            }
        }
        return redirect('project')->with('success', 'The project added successfully !!');
        // $project = new project();
        // $project->resume_id = $request->input('idr');
        // $project->percent = $request->input('percent');
        // $project->langage = $request->input('langage');
        // $project->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('images', 'public');
        }
        $project = project::find($id);
        $project->update($input);
        if ($project_images = $request->file('images')) {
            foreach ($project_images as  $image) {
                $path = $image->store('images/projects', 'public');
                $project->images()->create([
                    'link' => $path
                ]);
            }
        }
        return redirect('project')->with('success', 'The project added successfully !!');
        // dd($input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = project::find($id)->delete();
        return redirect('project')->with('danger', 'The project deleted successfully !!');
    }

    public function singleproject($id) {
        $project = project::find($id);
        return view('portfolio.single-project',['project'=>$project]);
    }
}
