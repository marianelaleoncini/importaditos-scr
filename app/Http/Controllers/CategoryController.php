<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.index-categories', compact('categories'));
    }

    /**
     * Show the create category form.
     * @return Illuminate\View\View
     */
    public function create() {
        return view('categories.create-categories'); 
    }

    /**
     * Store a new category
     * @param Illuminate\Http\Request  $request
     * @return Illuminate\Routing\Redirector
     */
    public function store(Request $request) { 
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        category::create(
            ['name' => $request->input('name')]
        );
        
        return redirect()->route('categories');
    }

    public function edit(Request $request, $category_id) {
        $category = Category::find($category_id);
        return view('categories.create-categories', compact('category')); 
    }

    public function update(Request $request, $category_id) {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        $category = Category::find($category_id);
            
        $category->name = $request->get('name');
        
        $category->save();

        return redirect()->route('categories'); 
    }

    public function destroy(Request $request, $category_id) {
        $category = Category::find($category_id);        
        $category->delete();
        return redirect()->route('categories'); 
    }
}
