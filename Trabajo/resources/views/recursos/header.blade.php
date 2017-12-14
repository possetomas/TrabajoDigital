<div>		
			<div class="opciones">
				<div class="servicio">
				<a href="/servicio">Servicio al consumidor</a></div>
				<div style="float: right">
				<nav class="main.nav">
						<ul>
							<li><a href="/main">Home</a></li>
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
							<li><a href="/contacto">Contacto</a></li>
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
</div>