<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessage;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

     public function index()
     {
         return view('admin.categories.index', ['categories' => Category::all()]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return Response
      */
     public function create()
     {
         return view('admin.categories.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string',
             'description' => 'nullable',
         ]);

         Category::create($request->all());

         return redirect()->route('categories.index')->with('success', FlashMessage::success('category', 'add'));
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
         return view('admin.categories.edit', ['category' => Category::findOrFail($id)]);
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
            'name' => 'required|string',
            'description' => 'nullable',
        ]);

         $category = Category::findOrFail($id);
         $category->update($request->all());

         return redirect()->back()->with('success', FlashMessage::success('category', 'update'));
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return Response
      */
     public function destroy($id)
     {
         $category = Category::findOrFail($id);
         $category->delete();
         return redirect()->back()->with('danger', FlashMessage::danger('category', 'delete'));
     }
}
