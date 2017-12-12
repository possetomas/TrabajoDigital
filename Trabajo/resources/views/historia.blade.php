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
<div class = "historia">
<center>
<h1>HISTORIA</h1>	
FUOME arranca en el año 2017 con clara vocacion internacional y con la intencion de vestir a jovenes comprometidos con su entorno, que viven en comunidad y se relacionan entre si. Jovenes que visten de forma relajada, huyendo de los esteriotipos y que quieren sentirse bien con lo que llevan. Para ellos FUOME recoge las ultimas tendencias internacionales, las mezcla con las influencias que marca la calle y los clubs de moda, y las reinterpreta a su estilo para transformarlas en prendas comodas y facilas de llevar. 

FUOME evoluciona de forma paralela a su cliente, siempre atento a las nuevas tecnologias, los moviemientos sociales y a las ultimas tendencias artisiticas o musicales. Todo esto se ve reflejado ya no solo en sus diseños, sino tambien en las tiendas. Inspirada en la mitica ciudad de Barcelona, la renovacion de la oferta es constante.
<br>
<h1>COLECCIONES</h1>
FUOME lleva a la calle las últimas tendencias internacionales en forma de prendas fáciles, cómodas y desenfadadas. Las colecciones de FUOME están pensadas para vestir a hombres y mujeres jóvenes de mentalidad, teniendo en cuenta que la edad ya no es una barrera a la hora de elegir nuestro vestuario.

Tanto para los chicos como para las chicas, FUOME tiene líneas completamente diferenciadas. Por un lado, los "teenagers" encontrarán en sus tiendas las líneas más desenfadadas en forma de sudaderas, camisetas, tejanos, bermudas, bambas y gorras, y con el algodón como tejido principal.	
</center>
</div>
<br>
<br>

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