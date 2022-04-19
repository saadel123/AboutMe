<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Middleware('auth');
        return redirect('auth')->with('msg', 'svp connecter pour consulter les cv!!');
    }
    public function index()
    {
        $listexps = Experience::all();
        return view('portfolio/experience', [
            'listexps' => $listexps,
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
        //
        $exp = new Experience();
        $exp->resume_id = $request->input('idr');
        $exp->postion = $request->input('postion');
        $exp->slide = $request->input('slide');
        $exp->titre = $request->input('titre');
        $exp->body = $request->input('body');
        $exp->debut = $request->input('debut');
        $exp->fin = $request->input('fin');
        $exp->save();
        return redirect('exp')->with('success', 'Experience added successfully !!');
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
        $exps = Experience::find($id);
        $exps->resume_id = $request->input('idr');
        $exps->postion = $request->input('postion');
        $exps->slide = $request->input('slide');
        $exps->titre = $request->input('titre');
        $exps->body = $request->input('body');
        $exps->debut = $request->input('debut');
        $exps->fin = $request->input('fin');
        $exps->save();
        return redirect('exp')->with('success', 'Experince updated succussefuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exps = Experience::find($id)->delete();
        return redirect('exp')->with('danger', 'Experince deleted successfully');
    }
}
