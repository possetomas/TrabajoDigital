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
                <a href="#">Servicio al consumidor</a></div>
                <div style="float: right">
                <nav class="main.nav">
                        <ul>
                            <li><a href="/main">Home</a></li>
                            @if (Auth::check())
                          <li><a href="/iniciosesion">Iniciar sesión</a></li>
                            <li><a href="/registro">Regístrese</a></li>
                            <li><a href="#">Contacto</a></li>
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
        <form action="iniciosesion.php" class="registro" method="POST">
        <div class="rounded">
        <br>
        <br>
            <b>Olvido su contraseña?</b> <br><br><br> Ingrese su mail y le enviaremos el metodo de recuperación:<br><br>
            <input type="text" name="olvido" style="width: 300px"><br>
            <span style="color:red;">
            <?php
            if ($_POST) {
                if ((traerPorEmail($_POST["olvido"])) == NULL) {
                echo "El mail no existe";
            }
            }
            ?>
            </span>
            <br>
        </div>
            <input type="submit" value="Enviar">
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
                <footer class= "main-footer">
                        <ul>
                            <li><a href="main.html">Home</a></li>
                            <li><a href="#">Quienes somos</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li>Seguinos en las redes!</li>
                            <img src="./images/fb.png">
                            <img src="./images/pi.png">
                            <img src="./images/tw.png">
                            <img src="./images/in.png">
                            <img src="./images/you.png">
                            <img src="./images/tu.png">
                        </ul>
                </footer>
            </div></center>
    </body>
</html>
@endif
