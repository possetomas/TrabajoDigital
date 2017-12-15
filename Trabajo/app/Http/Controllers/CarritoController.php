<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CarritoController extends Controller
{
    public function compras($id = null){

    	if ($id) {
	    	$carro = session()->get('carro');
	    	unset($carro->items[$id]);
	    	session()->forget('carro');
	    	session()->put('carro', $carro);
    		return redirect()->route('carrito');
    	} else {
    		return view('carrito');
    	}
    }

    public function descartar(){
    	Session::flush();
    	return view ('carrito');
    }

}
