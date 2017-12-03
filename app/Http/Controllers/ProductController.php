<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use App\Brand;
use App\Size;
use App\Category;
use Illuminate\Http\Request;
use Storage;

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
        $brands = Brand::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('products.create-products', compact('brands', 'categories')); 
    }

    /**
     * Store a new Product
     * @param Illuminate\Http\Request  $request
     * @return Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $fileName = $this->saveFile($request);

        $this->validate($request, [
            'name' => 'required|max:255',
            'brand' => 'required',
            'size' => 'required',
            'price' => 'required'
        ]);

        $product = Product::create([
            'name' => $request->get('name'), 
            'size_id' => $request->get('size'),
            'price' => $request->get('price'),
            'stock'=> $request->get('stock'),
            'image' => $fileName
        ]);
        
        $categories = $request->get('categories');
        $product->categories()->sync($categories);

        return redirect()->route('products');        
    }

    public function edit(Request $request, $product_id) {
        $product = Product::find($product_id);  
        if ($product->categories) {
            $selectedCategories = $product->categories->pluck('id')->toArray();
        }
        $brands = Brand::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('products.create-products', compact('product', 'brands', 'categories', 'selectedCategories')); 
    }

    public function update(Request $request, $product_id) {
        $fileName = $this->saveFile($request);

        $this->validate($request, [
            'name' => 'required|max:255',
            'brand' => 'required',
            'size' => 'required',
            'price' => 'required'
        ]);

        $product = Product::find($product_id);
            
        $product->name = $request->get('name');
        $product->size_id = $request->get('size');
        $product->price = $request->get('price');
        $product->stock= $request->get('stock');
        if ($fileName) {
            $product->image = $fileName;
        }
        $categories = $request->get('categories');
        /* The sync method accepts an array of IDs to place on the intermediate table.
        Any IDs that are not in the given array will be removed from the intermediate table.  */
        $product->categories()->sync($categories);

        $product->save();

        return redirect()->route('products'); 
    }

    public function getSizes(Request $request, $brand_id) {
        $sizes = Size::where('brand_id', $brand_id)->orderBy('name', 'asc')->get();
        return $sizes;
    }   

    public function saveFile($request) {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            Storage::disk('custom-local')->put(
                'product_images/' . $fileName,
                file_get_contents($request->file('image')->getRealPath())
            );
            return $fileName;
        } else {
            return null;
        }
    }

    public function destroy(Request $request, $product_id) {
        $product = Product::find($product_id);        
        $product->delete();
        return redirect()->route('products'); 
    }
}
