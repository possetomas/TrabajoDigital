<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fouomé</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/productos.css') }}">
	<meta name="viewport" content="initial-scale=1">
	<script type="text/javascript" src="carrito.js"></script>
</head>
<body>
<div class="opciones">
@include('recursos/header')
<br>
<center id="siCarrito">
@if (Session::has('carro'))
	<h1>Carro de compras:</h1>
	<br>
	<section class="asides" style="display: inline-flex;">
		<aside style="text-align: left">
			
				<h1>Items:</h1>
				
				@foreach(session::get('carro')->items as $item)
				<div class="productosCarro">
				<h6 class="h61">{{ $item['nombre'] }}</h6>
				<h5>${{ $item['precio'] }}</h5>
				<h6 class="h62">{{ $item['color'] }}</h6>
				<img src="{{ $item['urlfoto'] }}">
				<button onclick="window.location = '{{ route('carrito', $item['id'], $item['precio']) }}'">Descartar producto</button>
				<h6 class="h63">Cantidad: {{ $item['cantidad'] }}</h6>
				</div>
				@endforeach
				<br>

				<form action="carrito" method="POST">
				{{ csrf_field() }}
				<input type="submit" value="Descartar todos" onClick="return confirm('Estas seguro/a de que quieres descartar todos los productos?'); window.location.reload()">
				</form>	


			@if (Auth::check())
			<p>Iniciá sesion o registrate para poder guardar productos en tu carro de compras</p>
			<a href="/iniciosesion">Iniciar sesión</a>
			<br>
			<a href="/registro">Regístrese</a>
			@endif
		</aside>

		<aside>
			
			<h1>Monto total:</h1>
			<center>
			<ul style="display: table-row;">


				<br>


				<li>Total: ${{ Session::has('carro') ? Session::get('carro')->precioTotal : '0'}}
				</li>
				<br>
				<br>
				<li><input type="submit" name="" value="Continuar al checkout"></input></li>
			</ul>

			
			</center>
		</aside>
	</section>
@else
<h1>Tu carro de compras esta vacio!</h1>
<h5 style="bottom: 15px; position: relative;">Segui viendo mas productos...</h2>
<div>
	<div class="fotos" style="margin-right: 0px; margin-left: 0px; */">
		
		<div class="fotofil">
        	<img class="foto" src="./images/productos/mujer/01aa.jpeg">
        	<img class="foto" src="./images/productos/mujer/02aa.jpeg">
        	<img class="foto" src="./images/productos/mujer/03aa.jpeg">
        	<img class="foto" src="./images/productos/mujer/04aa.jpeg">
        </div>
        <a href="{{ route('mujer') }}"><h4 style="text-decoration: underline;">Ir a la categoria de mujeres</h4></a>
        
        	<img class="foto" src="./images/productos/hombre/01aa.jpeg">
        	<img class="foto" src="./images/productos/hombre/02aa.jpeg">
        	<img class="foto" src="./images/productos/hombre/03aa.jpeg">
        	<img class="foto" src="./images/productos/hombre/04aa.jpeg">
        </div>
        <a href="{{ route('hombre') }}"><h4 style="text-decoration: underline;">Ir a la categoria de hombres</h4></a>
        <div class="fotofil">
    </div>
</div>
@endif
</center>

@include('recursos/footer')
			</div></center>
	
</body>
</html>