@extends('layouts.plantilla')
@section('cabecera')
@include('layouts.cabecera')
@stop
@section('carrusel')
{!! Form::open(['route' => 'carta.store'],['class' => 'form-group row' ])!!}

{{  Form::label('clasificacion', 'Clasificación en carta', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }}
{{  Form::text('clasificacion', 'Intoduce en que apartado de la carta quieres que aparezca el producto',['class' => 'form-control'] ) }}

{{  Form::label('nombre', 'Nombre del producto', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }}
{{  Form::text('nombre','El nombre que aparecerá', ['class' => 'form-control'] ) }}

{{  Form::label('precio', 'Precio', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }}
{{  Form::number('precio', 'precio',['class' => 'form-control'] ) }}

{{  Form::label('imagen', 'Puedes insertar la imagen del producto', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }}
{{  Form::file('imagen')  }}

{{  Form::label('descripcion', 'Descripción', ['class' => 'col-md-4', 'col-form-label', 'text-md-right']) }};
{{  Form::textarea('descripcion','Basicamente los ingredientes', ['class' => 'form-control'] ) }}

{!! Form:: submit('Enviar', ['class'=> 'btn btn-success']) !!}

{!! Form::close() !!}

@endsection
@section('ofertas')
@include('layouts.producto_ofertas')
@stop
@section('pie')
@include('layouts.pie')
@stop

