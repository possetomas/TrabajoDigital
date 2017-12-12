<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pagina Inicio Cliente</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
		<meta name="viewport" content="initial-scale=1">
	</head>
	<body>
			<div class="opciones">
				<div style="float: left; margin-left: 18px; margin-top: 16px" >
				<a href="/servicio">Servicio al consumidor</a></div>
				<div style="float: right">
				<nav class="main.nav">
						<ul>
							<li><a href="/main">Home</a></li>
							<li><a href="/iniciosesion">Iniciar sesión</a></li>
							<li><a href="/registro">Regístrese</a></li>
							<li><a href="/contacto">Contacto</a></li>
						</ul>
				</nav></div>
			</div>
			<br style="clear: both">
			<div class="top-bar" >
				<header class="main-header">
					<center>
						<img src="./images/titulo.png"></center>
				</header>
			</div>
<br>
<center>



		<div class="rounded">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Mail:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Constraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recorderme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvido su contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
				<footer class= "main-footer">
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
