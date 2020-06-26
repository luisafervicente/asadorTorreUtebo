@extends('layouts.plantilla')
@section('cabecera')
@include('layouts.cabecera')
@stop
@section('carrusel')
 <table class="table">
    
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Clasificación</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        @foreach($carta as $producto)
        <tr>
            <th scope="row">1</th>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->nombre}}</td>
            <td><button type='button' class='btn btn-success'>Mostrar</td>
            <td><button type='button' class='btn btn-secondary'>Editar</td>
            <td><button type='button' class='btn btn-warning'>Eliminar</td>
        </tr>
         @endforeach
    </tbody>
</table>

@endsection
@section('ofertas')
@include('layouts.producto_ofertas')
@stop
@section('pie')
@include('layouts.pie')
@stop
 





