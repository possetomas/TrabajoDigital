<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fouomé</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
		<meta name="viewport" content="initial-scale=1">
	</head>
	<body>
@include('recursos/header')
<br>
<center>



		<div class="rounded">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-top: 10px;">
                            <label for="email" class="col-md-4 control-label">Mail:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <br>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-top: 10px;">
                            <label for="password" class="col-md-4 control-label">Constraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            <br>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recorderme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
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
@include('recursos/footer')
			</div></center>
	</body>
</html>
