<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StockController extends Controller
{
    /**
     * @return Illuminate\View\View
     */
    public function index()
    {
    	return view('stock.index-stock');
    }
}
