<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class BusquedaController extends Controller
{	
	public function index(){
		$key = $_GET["busqueda"];
    	// $productos = Producto::all()->where('nombre', 'LIKE', $_GET["busqueda"].'%');
    	$productos = Producto::where('nombre', 'LIKE', '%'.$_GET["busqueda"].'%')->get();
    	// var_dump($productos); die;
    	if ($productos == "[]") {
    	$productos = Producto::where('color', 'LIKE', '%'.$_GET["busqueda"].'%')->get();
    	} 
    	
    	return view ('busqueda', ['productos' => $productos]);
    }

    public function buscar() {
    	return view ('busqueda');
    }
}