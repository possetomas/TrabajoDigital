<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quienes Somos</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
	<meta name="viewport" content="initial-scale=1">
</head>
<body>
<div class="opciones">
@include('recursos/header')
<br>

<center>
	<h1>Carro de compras</h1>
	<br>
	<section style="display: inline-flex;">
		<aside style="margin-right: 80px; margin-left: 80px; text-align: left">
			<h1>Tu carro de compras esta vacio!</h1>
			<p>Iniciá sesion o registrate para poder guardar productos en tu carro de compras</p>
			<a href="/iniciosesion">Iniciar sesión</a>
			<br>
			<a href="/registro">Regístrese</a>
		</aside>
		<aside style="margin-right: 80px; margin-left: 80px">
			<h1>Monto total:</h1>
			<center>
			<ul style="display: table-row;">
				<li>Valor de orden:</li>
				<li>Total:</li>
				<li><input type="submit" name="" value="Continuar al checkout"></input></li>
			</ul>
			</center>
		</aside>
	</section>

</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@include('recursos/footer')
			</div></center>
	
</body>
</html>