<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class HombreController extends Controller
{
     public function index(){
    	$productos = Producto::all()->where('idProducto', '>', '6');
    	return view ('hombre', ['productos' => $productos]);
    }
}
