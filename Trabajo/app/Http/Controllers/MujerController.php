<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class MujerController extends Controller
{
     public function index(){
    	$productos = Producto::all()->where('idProducto', '<=', '6');
    	return view ('mujer', ['productos' => $productos]);
    }
}
