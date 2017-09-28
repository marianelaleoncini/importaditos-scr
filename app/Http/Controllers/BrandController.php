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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     protected function validator(array $data)
     {
         return Validator::make($data, [
             'name' => 'required|max:255'
         ]);
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
}
