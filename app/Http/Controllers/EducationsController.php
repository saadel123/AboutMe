<?php

namespace App\Http\Controllers;

use App\Models\Educations;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        return view('admin.educations.index',['educations'=>Educations::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Educations::create($input);
        return redirect()->route('educations.index')->with('success', 'le contenu a été bien enregistré');
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
        return view('admin.educations.edit',['education'=>Educations::findOrFail($id)]);
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
        $education = Educations::findOrFail($id);
        $education->update($input);
        return redirect()->route('educations.index')->with('success', 'le contenu a été bien enregistré');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $education = Educations::findOrFail($id);
        $education->delete();
        return redirect()->route('educations.index')->with('success', 'le contenu a été bien enregistré');
    }
}
