@extends('layouts.plantilla')
@section('cabecera')
@include('layouts.cabecera')
@stop
@section('carrusel')
@include('layouts.bloque_nueva_orientacion')
@include('layouts.barra_carta')
@stop
@section('ofertas')
@include('layouts.productos_carta')
@stop
@section('pie')
@include('layouts.pie')
@stop
@section('cokis')
@include('layouts.coockis')
@stop
