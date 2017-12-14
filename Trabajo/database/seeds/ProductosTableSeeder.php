<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

// Productos mujer

        $producto = new \App\Producto([
        	'idProducto' => '1',
        	'codigo' => 'M01',
        	'precio' => '$800',
            'urlfoto' => './images/productos/mujer/01aa.jpeg',
            'urlfoto2' => './images/productos/mujer/01bb.jpeg',
            'nombre' => 'Remera manga larga a rayas',
            'color' => 'Blanco y negro',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '2',
            'codigo' => 'M02',
            'precio' => '$920',
            'urlfoto' => './images/productos/mujer/02aa.jpeg',
            'urlfoto2' => './images/productos/mujer/02bb.jpeg',
            'nombre' => 'Sweater con cuello',
            'color' => 'Negro',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '3',
            'codigo' => 'M03',
            'precio' => '$700',
            'urlfoto' => './images/productos/mujer/03aa.jpeg',
            'urlfoto2' => './images/productos/mujer/03bb.jpeg',
            'nombre' => 'Sweater',
            'color' => 'Gris claro',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '4',
            'codigo' => 'M04',
            'precio' => '$850',
            'urlfoto' => './images/productos/mujer/04aa.jpeg',
            'urlfoto2' => './images/productos/mujer/04bb.jpeg',
            'nombre' => 'Sweater cuello en V',
            'color' => 'Gris oscuro',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '5',
            'codigo' => 'M05',
            'precio' => '$1100',
            'urlfoto' => './images/productos/mujer/05aa.jpeg',
            'urlfoto2' => './images/productos/mujer/05bb.jpeg',
            'nombre' => 'Pantalon floreado',
            'color' => 'Varios',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '6',
            'codigo' => 'M06',
            'precio' => '$780',
            'urlfoto' => './images/productos/mujer/06aa.jpeg',
            'urlfoto2' => './images/productos/mujer/06bb.jpeg',
            'nombre' => 'Pantalon de jean',
            'color' => 'Azul',
        ]);
        $producto->save();


// Productos hombre

        $producto = new \App\Producto([
            'idProducto' => '7',
            'codigo' => 'H01',
            'precio' => '$1300',
            'urlfoto' => './images/productos/hombre/01aa.jpeg',
            'urlfoto2' => './images/productos/hombre/01bb.jpeg',
            'nombre' => 'Pantalon',
            'color' => 'Negro',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '8',
            'codigo' => 'H02',
            'precio' => '$950',
            'urlfoto' => './images/productos/hombre/02aa.jpeg',
            'urlfoto2' => './images/productos/hombre/02bb.jpeg',
            'nombre' => 'Chomba',
            'color' => 'Negro',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '9',
            'codigo' => 'H03',
            'precio' => '$1300',
            'urlfoto' => './images/productos/hombre/03aa.jpeg',
            'urlfoto2' => './images/productos/hombre/03bb.jpeg',
            'nombre' => 'Combo remeras',
            'color' => 'Varios',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '10',
            'codigo' => 'H04',
            'precio' => '$700',
            'urlfoto' => './images/productos/hombre/04aa.jpeg',
            'urlfoto2' => './images/productos/hombre/04bb.jpeg',
            'nombre' => 'Short',
            'color' => 'Gris',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '11',
            'codigo' => 'H05',
            'precio' => '$600',
            'urlfoto' => './images/productos/hombre/05aa.jpeg',
            'urlfoto2' => './images/productos/hombre/05bb.jpeg',
            'nombre' => 'Remera',
            'color' => 'Blanco',
        ]);
        $producto->save();
        $producto = new \App\Producto([
            'idProducto' => '12',
            'codigo' => 'H06',
            'precio' => '$950',
            'urlfoto' => './images/productos/hombre/06aa.jpeg',
            'urlfoto2' => './images/productos/hombre/06bb.jpeg',
            'nombre' => 'Sweater',
            'color' => 'Gris',
        ]);
        $producto->save();
    }
}
