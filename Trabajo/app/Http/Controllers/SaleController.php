<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Carro;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class SaleController extends Controller
{
    public function rebaja(){
    	$productos = Producto::all();
    	return view ('sale', ['productos' => $productos]);
    }
        public function getAddToCart(Request $request, $id){
    	$producto = Producto::find($id);
    	$oldCart = Session::has('carro') ? Session::get('carro') : null;
    	$carro = new Carro($oldCart);
    	$carro->agregar($producto, $producto->id, $producto->codigo, $producto->precio, $producto->urlfoto, $producto->urlfoto2, $producto->nombre, $producto->color);

    	$request->session()->put('carro', $carro);
        if(\Request::route()->getName() === 'hombre') { 
            return redirect()->route('hombre');
        }
        elseif (\Request::route()->getName() === 'sale') {
        	return redirect()->route('sale');
        }

        else {
            return redirect()->route('mujer');
        }
    	
    }
}
