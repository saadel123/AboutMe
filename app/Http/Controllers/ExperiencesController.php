<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessage;
use App\Models\Experience;
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
        return view('admin.experiences.index', ['experiences' => Experience::all()]);
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
        $request->validate([
            'title_fr' => 'max:255',
            'title_en' => 'max:255',
            'title_de' => 'max:255',
            'lieu_fr' => 'max:255',
            'lieu_en' => 'max:255',
            'lieu_de' => 'max:255',
            'datedebut' => 'date',
            'datefin' => 'date',
        ]);

        $input = $request->all();
        Experience::create($input);
        return redirect()->route('experiences.index')->with('success', FlashMessage::success('Experience', 'add'));
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
        return view('admin.experiences.edit', ['experience' => Experience::findOrFail($id)]);
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
            'title_fr' => 'max:255',
            'title_en' => 'max:255',
            'title_de' => 'max:255',
            'lieu_fr' => 'max:255',
            'lieu_en' => 'max:255',
            'lieu_de' => 'max:255',
            'datedebut' => 'date',
            'datefin' => 'date',
        ]);

        $input = $request->all();
        $experience = Experience::findOrFail($id);
        $experience->update($input);
        return redirect()->back()->with('success', FlashMessage::success('Experience', 'update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return redirect()->back()->with('danger', FlashMessage::danger('Experience', 'delete'));
    }
}
