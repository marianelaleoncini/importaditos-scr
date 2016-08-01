<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{   
    /**
     * Show the list of sizes
     * @return Illuminate\View\View
     */
    public function index() {
        $sizes = Size::all();
        return view('sizes.index', compact('sizes'));
    }

    /**
     * Show the create size form.
     * @return Illuminate\View\View
     */
    public function create() {
        return view('sizes.create'); 
    }

    /**
     * Store a new Size
     * @param Illuminate\Http\Request  $request
     * @return Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        Size::create([
            'nombre' => $request['name'], 
            'brand' => $request['brand'],
            'height' => $request['height'],
            'weight'=> $request['weight']
        ]);
        return redirect();
    }
        
}
