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
@include('recursos/categorias')


        <aside>
        <div class="fotos">
        <div class="fotofil">

            @foreach($productos as $productoChunk)

            <div>
            <img class="foto" src="{{ $productoChunk->urlfoto }}">
            <br>
            <h5 class="textfot"><a>{{ $productoChunk->nombre }}</a></h5>
            <h5 class="textfot"><a>{{ $productoChunk->precio }}</a></h5>
            @if ( empty ($producto) )
            <a href="{{ route('producto.agregarAlCarro', ['id' => $productoChunk->id]) }}"><img style="width: 20px; position: relative; left: 90px; top: -80px;" src="./images/carrito.svg"></a>
            @endif
            </div>


            
            @if ($productoChunk->id % 3 == 0)
            </div>
            <br>
            <div class="fotofil">
            @endif
      
            @endforeach

            @foreach($productos as $productoChunk)

            <div>
            <img class="foto" src="{{ $productoChunk->urlfoto }}">
            <br>
            <h5 class="textfot"><a>{{ $productoChunk->nombre }}</a></h5>
            <h5 class="textfot"><a>{{ $productoChunk->precio }}</a></h5>
            @if ( empty ($producto) )
            <a href="{{ route('producto.agregarAlCarro', ['id' => $productoChunk->id]) }}"><img style="width: 20px; position: relative; left: 90px; top: -80px;" src="./images/carrito.svg"></a>
            @endif
            </div>


            
            @if ($productoChunk->id % 3 == 0)
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