<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessage;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        return view('admin.certificates.index', ['certificates' => Certificate::orderBy('created_at', 'desc')->get()]);
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_fr' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_de' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($request->hasFile('image')) {
            $input['image'] = $request->image->store('certificates/images', 'public');
        }

        Certificate::create($input);

        return redirect()->route('certificates.index')->with('success', FlashMessage::success('Certificate', 'add'));
    }

    public function show($id)
    {
        return view('admin.certificates.show', ['certificate' => Certificate::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('admin.certificates.edit', ['certificate' => Certificate::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_fr' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_de' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($request->hasFile('image')) {
            $input['image'] = $request->image->store('certificates/images', 'public');
        }

        $certificate = Certificate::findOrFail($id);
        $certificate->update($input);

        return redirect()->back()->with('success', FlashMessage::success('Certificate', 'update'));
    }

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->delete();

        return redirect()->back()->with('danger', FlashMessage::danger('Certificate', 'delete'));
    }
}
