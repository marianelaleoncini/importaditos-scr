<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use App\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    /**
     * Show the list of Products
     * @return Illuminate\View\View
     */
    public function index() {
        $products = Product::all();
        return view('products.index-products', compact('products'));
    }
    
    /**
    * Show the create Product form.
    * @return Illuminate\View\View
    */
    public function create() {
        $brands = Brand::all();
        return view('products.create-products', compact('brands')); 
    }

    /**
     * Store a new Product
     * @param Illuminate\Http\Request  $request
     * @return Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'brand' => 'required'
        ]);

        Product::create([
            'name' => $request->get('name'), 
            'brand_id' => $request->get('brand'),
            'price' => $request->get('price'),
            'stock'=> $request->get('stock')
        ]);

        return redirect()->route('products');        
    }
        
}
