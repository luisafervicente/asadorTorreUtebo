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
            <th colspan="3"></th>

        </tr>
    </thead>
    <tbody>
        @foreach($carta as $producto)
        <tr>
            <th scope="row">1</th>
            <td>{{$producto->nombre}}  </td>
            <td>{{$producto->nombre}} </td>
            <td>{{$producto->nombre}} </td>
            <td>{{$producto->nombre}} </td>
            <td><a href='{{route("carta.show", $producto->id)}}' class="success"> Mostrar</a> </td>
            <td><a href='#'class="success"> Editar</a> </td>
            <td><a href='#'class="success"> Borrar</a> </td>
                   </tr>
                   @endforeach
                   </tbody>
                   </table>
                   <a href='{{route("carta.create")}}'><button type='button' class='btn btn-success'>Crear</button></a>
                @endsection
                @section('ofertas')
                @include('layouts.producto_ofertas')
                @stop
                @section('pie')
                @include('layouts.pie')
                @stop






