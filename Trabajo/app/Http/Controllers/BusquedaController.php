<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function buscar() {
    	return view ('busqueda');
    }
}
