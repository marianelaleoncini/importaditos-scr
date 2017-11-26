<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Size;
use App\Brand;
use Illuminate\Http\Request;

class SizeController extends Controller
{   
    /**
     * Show the list of sizes
     * @return Illuminate\View\View
     */
    public function index() {
        $sizes = Size::all();
        return view('sizes.index-sizes', compact('sizes'));
    }
    
    /**
    * Show the create size form.
    * @return Illuminate\View\View
    */
    public function create() {
        $brands = Brand::all();
        return view('sizes.create-sizes', compact('brands')); 
    }

    /**
     * Store a new Size
     * @param Illuminate\Http\Request  $request
     * @return Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'brand' => 'required'
        ]);

        Size::create([
            'name' => $request->get('name'), 
            'brand_id' => $request->get('brand'),
            'height' => $request->get('height'),
            'weight'=> $request->get('weight')
        ]);

        return redirect()->route('sizes');        
    }
    
    public function edit(Request $request, $size_id) {
        $size = Size::find($size_id);
        $brands = Brand::all();
        return view('sizes.create-sizes', compact('size', 'brands')); 
    }

    public function update(Request $request, $size_id) {

        $this->validate($request, [
            'name' => 'required|max:255',
            'brand' => 'required'
        ]);

        $size = Size::find($size_id);        
            
        $size->name = $request->get('name');
        $size->brand_id = $request->get('brand');
        $size->height = $request->get('height');
        $size->weight= $request->get('weight');

        $size->save();

        return redirect()->route('sizes'); 
    }

    public function destroy(Request $request, $size_id) {
        $size = Size::find($size_id);        
        $size->delete();
        return redirect()->route('sizes'); 
    }
}
