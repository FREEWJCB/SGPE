@extends('plantilla.head')

@section('titulo','Inicio')
@section('inicio', 'active')
@section('inicio2', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
@endsection

@section('contenido')
    @include('plantilla.titulo')

@endsection
