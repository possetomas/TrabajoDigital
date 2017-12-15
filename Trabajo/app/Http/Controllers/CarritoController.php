<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CarritoController extends Controller
{
    public function compras(){
    	return view ('carrito');
    }

    public function descartar(){
    	Session::flush();
    	return view ('carrito');
    }
}
