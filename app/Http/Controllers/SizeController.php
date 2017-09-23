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
        Size::create([
            'name' => $request->get('name'), 
            'brand_id' => $request->get('brand'),
            'height' => $request->get('height'),
            'weight'=> $request->get('weight')
        ]);
        return redirect()->route('sizes');        
    }
        
}
