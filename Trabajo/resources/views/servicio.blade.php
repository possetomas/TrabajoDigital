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
				<div class="servicio">
				<a href="/servicio">Servicio al consumidor</a></div>
				<div style="float: right">
				<nav class="main.nav">
						<ul>
							@if (!Auth::check())
							<li><a href="/iniciosesion">Iniciar sesión</a></li>
							<li><a href="/registro">Regístrese</a></li>
							@endif
							@if (Auth::check())
							<li>Usuario <strong style="text-transform: capitalize;">{{Auth::user()->name}} {{Auth::user()->lastname}}</li></strong>
							<li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
							@endif
						</ul>
				</nav></div>
			</div>
			<br style="clear: both">
			<div class="top-bar">
				<header class="main-header">
					<center>
						<img src="./images/titulo.png"></center>
				</header>
				<div>
					<center>
					<ul>
					<p><a href="/mujer">Mujer</a></p>
					<p><a href="/hombre">Hombre</a></p>
					<p><a href="/sale" style="color: white">Sale</a></p>
					<p><u><input type="text" name="busqueda" placeholder="Buscá tu producto..."></u><img style="width: 20px; position: relative; right: 10px; top: 4px" src="./images/busq.png">
					</p>
					<p><a href="/carrito">Tu carrito<img style="width: 20px; position: relative; left: 5px; top: 4px" src="./images/carrito.svg"></a></p></ul>
					</center>
				</div>
			</div>
<br>


FALTA CONTENIDO DEL COSTUMER SERVICE



				<footer class="main-footer" style="position: initial">
					<ul>
							<li><a href="/main">Home</a></li>
							<li><a href="/historia">Quienes somos</a></li>
							<li><a href="/contacto">Contacto</a></li>
							<li>Seguinos en las redes!</li>
							<a href="https://www.facebook.com/"> <img  src="./images/fb.png"> </a>
							<a href="https://ar.pinterest.com/"> <img src="./images/pi.png"> </a>
							<a href="https://twitter.com/"> <img src="./images/tw.png"> </a>
							<a href="https://www.instagram.com/"> <img src="./images/in.png"> </a>
							<a href="https://www.youtube.com/"> <img src="./images/you.png"> </a>
							<a href="https://www.tumblr.com/"> <img src="./images/tu.png"> </a>
						</ul>
				</footer>
			</div></center>
	
</body>
</html>