<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PedidosController extends Controller
{
    public function index()
    {
        return view('pedidos.index');
    }
}
