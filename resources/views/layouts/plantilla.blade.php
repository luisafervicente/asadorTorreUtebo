<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Asador</title>



        
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
        <script src=" {{asset('js/bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>  
        <script src="https://kit.fontawesome.com/843befe336.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/programacionextra.js')}}"></script>
        <script src="{{ asset('js/fuentes.js')}}" type="text/javascrip"></script>
    </head>
    <body>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div id='cabecera'>
            <div class="container-fluid" id="cuerpo">

                @yield('cabecera')
            </div>

            <div class='container'>
                @yield('carrusel')
            </div>
            <div class="container" id="tajetas">
                @yield('ofertas')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>