<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

     public function index()
     {
         return view('admin.skills.index',['skills'=>Skills::all()]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return Response
      */
     public function create()
     {
         return view('admin.skills.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
     public function store(Request $request)
     {
         $input = $request->all();
         Skills::create($input);
         return redirect()->route('skills.index')->with('success', 'le contenu a été bien enregistré');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
     public function show()
     {

     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
     public function edit($id)
     {
         return view('admin.skills.edit',['skill'=>Skills::findOrFail($id)]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  int  $id
      * @return Response
      */
     public function update(Request $request,$id)
     {
        //  $input = $request->all();
         $skill = Skills::findOrFail($id);
         $skill->update($request->all());
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
         $skill = Skills::findOrFail($id);
         $skill->delete();
         return redirect()->back()->with('success', 'le contenu a été bien enregistré');
     }
}
