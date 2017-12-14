<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fouomé</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/productos.css') }}">
	<meta name="viewport" content="initial-scale=1">
</head>
<body>
@include('recursos/header')
<br>
<center class="todoprod">
<section class="productos">
	<div class="prod-div">
        <aside class="categorias">
	        <div class="texto">
		        <ul>
			        <h1>Nuevos arrivos</h1>
			        <li>Ropa</li>
			        <li>Calzado y accesorios</li>
		        </ul>
		        <ul>
			        <h1>Ofertas</h1>
			        <li>3 por 2</li>
			        <li>El trato semanal</li>
		        </ul>
		        <ul>
			        <h1>Comprá por producto</h1>
			        <li>Remeras</li>
			        <li>Pantalones</li>
			        <li>Shorts</li>
			        <li>Jeans</li>
			        <li>Buzos</li>
			        <li>Camperas</li>
			        <li>Accesorios</li>
		        </ul>
		        <ul>
			        <h1>Comprá por concepto</h1>
			        <li>Moderno</li>
			        <li>Clasico</li>
			        <li>Trendy</li>
			        <li>Calidad Premium</li>
		        </ul>
	        <div>
        </aside>


        <aside>
        <div class="fotos">
        <div class="fotofil">

        	@foreach($productos as $productoChunk)

        	<div>
        	<img class="foto" src="{{ $productoChunk->urlfoto2 }}"
        	onmouseover="this.src='{{ $productoChunk->urlfoto }}'"
        	onmouseout="this.src='{{ $productoChunk->urlfoto2 }}'">
        	<br>
        	<h5 class="textfot"><a>Agregar al carro</a></h5>
        	</div>


        	
        	@if ($productoChunk->idProducto % 3 == 0)
        	</div>
        	<br>
        	<div class="fotofil">
        	@endif
      
        	@endforeach
        </div>
        </div>
    	</aside>


        </div>
    </div>
</section>
</center>

@include('recursos/footer')
			</div></center>
	
</body>
</html>