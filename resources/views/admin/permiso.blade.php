@extends('plantilla.menu')

@include('js.permiso')

@section('titulo','Permiso')
@section('horario_m', 'menu-open')
@section('horarios', 'active')
@section('permiso', 'active')
@section('permiso2', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Horarios</a></li>
    <li class="breadcrumb-item active">Permiso</li>
@endsection

@section('contenido')
    @include('plantilla.titulo')

@endsection