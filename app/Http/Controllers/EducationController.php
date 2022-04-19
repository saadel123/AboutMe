<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->Middleware('auth');
        return redirect('auth')->with('msg', 'svp connecter pour consulter les cv!!');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listedc = Education::all();
        return view('portfolio/education', [
            'listedc' => $listedc,
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
        $edc = new Education();
        $edc->resume_id = $request->input('idr');
        $edc->positioned = $request->input('positioned');
        $edc->titreed = $request->input('titreed');
        $edc->bodyed = $request->input('bodyed');
        $edc->debuted = $request->input('debuted');
        $edc->fined = $request->input('fined');
        $edc->save();
        return redirect('edc')->with('success', 'Education added successfully !!');
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
        $edc =Education::find($id);
        $edc->resume_id = $request->input('idr');
        $edc->positioned = $request->input('positioned');
        $edc->titreed = $request->input('titreed');
        $edc->bodyed = $request->input('bodyed');
        $edc->debuted = $request->input('debuted');
        $edc->fined = $request->input('fined');
        $edc->save();
        return redirect('edc')->with('success', 'Education added successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edc = Education::find($id)->delete();
        return redirect('edc')->with('danger', 'Education deleted successfully !!');
    }
}
