<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */

     public function index()
     {
         return view('admin.experiences.index',['experiences'=>Experiences::all()]);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return Response
      */
     public function create()
     {
         return view('admin.experiences.create');
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
     public function store(Request $request)
     {
         $input = $request->all();
         Experiences::create($input);
         return redirect()->route('experiences.index')->with('success', 'le contenu a été bien enregistré');
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
         return view('admin.experiences.edit',['experience'=>Experiences::findOrFail($id)]);
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
         $experience = Experiences::findOrFail($id);
         $experience->update($input);
         return redirect()->route('experiences.index')->with('success', 'le contenu a été bien enregistré');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return Response
      */
     public function destroy($id)
     {
         $experience = Experiences::findOrFail($id);
         $experience->delete();
         return redirect()->route('experiences.index')->with('success', 'le contenu a été bien enregistré');
     }
}
