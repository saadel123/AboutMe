<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessage;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        return view('admin.services.index', ['services' => Services::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_fr' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_de' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('icon')) {
            $input['icon'] = $request->icon->store('services/icon', 'public');
        }

        Services::create($input);

        return redirect()->route('services.index')->with('success', FlashMessage::success('Service', 'add'));
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
        return view('admin.services.edit', ['service' => Services::findOrFail($id)]);
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
            'title_fr' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_de' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $service = Services::findOrFail($id);

        if ($request->hasFile('icon')) {
            $input['icon'] = $request->icon->store('services/icon', 'public');
        }

        $service->update($input);

        return redirect()->back()->with('success', FlashMessage::success('Service', 'update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();
        return redirect()->back()->with('danger', FlashMessage::danger('Service', 'delete'));
    }
}
