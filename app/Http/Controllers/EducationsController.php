<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessage;
use App\Models\Education;
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
        return view('admin.educations.index', ['educations' => Education::all()]);
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
        $request->validate([
            'title_fr' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_de' => 'required|max:255',
            'lieu_fr' => 'nullable|max:255',
            'lieu_en' => 'nullable|max:255',
            'lieu_de' => 'nullable|max:255',
            'datedebut' => 'required|date',
            'datefin' => 'nullable|date|after_or_equal:datedebut',
        ]);

        $input = $request->all();
        Education::create($input);

        return redirect()->route('educations.index')->with('success', FlashMessage::success('Education', 'add'));
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
        return view('admin.educations.edit', ['education' => Education::findOrFail($id)]);
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
            'lieu_fr' => 'nullable|max:255',
            'lieu_en' => 'nullable|max:255',
            'lieu_de' => 'nullable|max:255',
            'datedebut' => 'required|date',
            'datefin' => 'nullable|date|after_or_equal:datedebut',
        ]);

        $input = $request->all();
        $education = Education::findOrFail($id);
        $education->update($input);

        return redirect()->back()->with('success', FlashMessage::success('Education', 'update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();
        return redirect()->back()->with('danger', FlashMessage::danger('Education', 'delete'));
    }
}
