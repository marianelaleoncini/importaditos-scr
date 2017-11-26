<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Brand;
use Validator;

class BrandController extends Controller
{
     public function index() {
        $brands = Brand::all();
        return view('brands.index-brands', compact('brands'));
    }

    /**
     * Show the create brand form.
     * @return Illuminate\View\View
     */
    public function create() {
        return view('brands.create-brands'); 
    }

    /**
     * Store a new brand
     * @param Illuminate\Http\Request  $request
     * @return Illuminate\Routing\Redirector
     */
    public function store(Request $request) { 
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        Brand::create(
            ['name' => $request->input('name')]
        );
        
        return redirect()->route('brands');
    }

    public function edit(Request $request, $brand_id) {
        $brand = Brand::find($brand_id);
        return view('brands.create-brands', compact('brand')); 
    }

    public function update(Request $request, $brand_id) {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        $brand = Brand::find($brand_id);
            
        $brand->name = $request->get('name');
        
        $brand->save();

        return redirect()->route('brands'); 
    }

    public function destroy(Request $request, $brand_id) {
        $brand = Brand::find($brand_id);        
        $brand->delete();
        return redirect()->route('brands'); 
    }
}
