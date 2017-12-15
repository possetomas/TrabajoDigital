<?php

namespace App;

class Carro
{
    public $items = null;
    public $precioTotal = 0;
    public $cantidadTotal = 0;

    public function __construct($carroViejo) {
    	if ($carroViejo) {
    		$this->items = $carroViejo->items;
    		$this->precioTotal = $carroViejo->precioTotal;
    		$this->cantidadTotal = $carroViejo->cantidadTotal;
    	}
    }

    public function agregar($item, $id, $codigo, $precio, $urlfoto, $urlfoto2, $nombre, $color) {
    	$itemStoreado = ['id' => $item->id, 'codigo' => $item->codigo, 'precio' => $item->precio, 'urlfoto' => $item->urlfoto, 'urlfoto2' => $item->urlfoto2, 'nombre' => $item->nombre, 'color' => $item->color, 'cantidad' => 0];

    	if ($this->items) {
    		if (array_key_exists($id, $this->items)) {
    			$itemStoreado = $this->items[$id];
    		}
    	}
    	$itemStoreado['cantidad']++;
    	$itemStoreado['precio'] = $item->precio * $itemStoreado['cantidad'];
    	$this->items[$id] = $itemStoreado;
    	$this->cantidadTotal++;
    	$this->precioTotal += $item->precio;
    }
}