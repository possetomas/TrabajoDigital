<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['id', 'codigo', 'precio', 'urlfoto', 'urlfoto2', 'nombre', 'color'];
    public $timestamps = false;
}
