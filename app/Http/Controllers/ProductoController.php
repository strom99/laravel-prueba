<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function show(Producto $producto){
        $pro = $producto->get();
        return view('/main')->with([
            'productos' => $pro
        ]);
    }
}
