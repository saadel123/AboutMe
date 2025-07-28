<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Contact::select(['id', 'name', 'email', 'object', 'created_at'])->latest();

            return DataTables::of($query)
                ->addColumn('actions', function ($user) {
                    return view('components.admin.ui.action-buttons', [
                        'editRoute' => route('admin.contacts.edit', $user),
                        'deleteRoute' => route('admin.contacts.destroy', $user),
                    ])->render();
                })
                ->rawColumns(['actions']) // Allow HTML for the 'actions' column
                ->make(true);
        }

        // For initial non-AJAX view load
        return view('admin.contacts.index');
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'object' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        Contact::create($validated);

        return redirect()->route('admin.contacts.index')->with('success', 'Contact créé avec succès.');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'object' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $contact->update($validated);

        return redirect()->route('admin.contacts.index')->with('success', 'Contact mis à jour avec succès.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('error', 'Contact supprimé avec succès.');
    }

}
