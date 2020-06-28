
<div id="tarjetas">
    
    <h2>{{$seleccion[0]->clasificacion}}</h2>
        <div class='row' > 
        @foreach($seleccion as $producto)
       
        <div  class='col-lg-6'  >
            <img src="{{ asset('images/bocadillo_pollo.jpg')}}" class="card-img-top" alt="bocadillo_pllo" >

            <h5>{{$producto->nombre }}</h5>
            <p>{{ $producto->descripcion }}</p>
            <div ><img src="{{ asset('images/estrellapeque.png')}}"   alt="estrella" style=' width: 20%;margin-bottom: 5%'class="estrella"><h3 class="centrado">
                    {{ $producto->precio }} € </h3>

            </div>
        </div> 

     
        @endforeach
    </div>