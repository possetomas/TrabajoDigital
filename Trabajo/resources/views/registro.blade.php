
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fouomé</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
		<meta name="viewport" content="initial-scale=1">
        <script type="text/javascript" src="registro.js"></script>
	</head>
	<body>
@include('recursos/header')
<br>
<center>

<div class="rounded">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="margin-top: 10px;">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}" style="margin-top: 10px;">
                            <label for="lastname" class="col-md-4 control-label">Apellido:</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-top: 10px;"v>
                            <label for="email" class="col-md-4 control-label">Mail:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p style="color: red">{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div style="margin-top: 10px;">
                            Sexo:<br>
                            <div style="margin-top: 10px;">
                            <input type="hidden" name="sexo" value="off">
                            Masculino<input type="radio" name="sexo" value="masculino">
                            Femenino<input type="radio" name="sexo" value="femenino">
                            Otro<input type="radio" name="sexo" value="otro">
                            </div>
                            <br>
                            <span style="color:red;"></span>

                            <div class="col-md-6">
                               

                                @if ($errors->has('sexo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-top: 10px;">
                            <label for="password" class="col-md-4 control-label">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <br>
                                    <span class="help-block">
                                        <p style="color: red">{{ $errors->first('password') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div style="margin-top: 10px;">
                        <h6>Acepta los terminos y condiciones?
                        <input type="hidden" name="terminos" value="off">
                        @if ($errors->has('terminos'))
                                <br>
                                    <span class="help-block">
                                        <p style="color: red">{{ $errors->first('terminos') }}</p>
                                    </span>
                                @endif
                        <input type="checkbox" name="terminos"></h6>
                        <span style="color:red; position: relative; bottom: 23px;"></span>
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
</div>
<br>
<br>
@include('recursos/footer')
			</div></center>
	</body>
</html>
