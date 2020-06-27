@extends('layouts.plantilla')
@section('cabecera')
@include('layouts.cabecera')
@stop
@section('carrusel')
{!! Form::open(['route' => 'carta.store'],['class' => 'form-group row' ])!!}

{{  Form::label('clasificacion', 'Clasificación en carta', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }}
{{  Form::text('clasificacion',$producto->clasificacion, ['class' => 'form-control'] ,) }}

{{  Form::label('nombre', 'Nombre del producto', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }}
{{  Form::text('nombre',$producto->nombre, ['class' => 'form-control'] ,array('readonly')) }}

{{  Form::label('precio', 'Precio', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }}
{{  Form::number('precio', $producto->precio,['class' => 'form-control'] ,array('readonly')) }}

{{  Form::label('descripcion', 'Descripción', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }};
{{  Form::textarea('descripcion',$producto->descripcion, ['class' => 'form-control'],array('readonly') ) }}

{!! Form::close() !!}
<div><a href="{{ asset('carta')}}"><button type='button' class='btn btn-succes'>Volver</button></a></div>
<div><a href="{{ asset('carta.edit',$producto->id)}}"><button type='button' class='btn btn-succes'>Editar</button></a></div>
@endsection
@section('ofertas')
@include('layouts.producto_ofertas')
@stop
@section('pie')
@include('layouts.pie')
@stop
