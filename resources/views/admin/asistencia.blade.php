@extends('plantilla.menu')

@include('js.asistencia')

@section('titulo','Asistencia')
@section('horario_m', 'menu-open')
@section('horarios', 'active')
@section('asistencia', 'active')
@section('asistencia2', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Horarios</a></li>
    <li class="breadcrumb-item active">Asistencia</li>
@endsection

@section('contenido')
    @include('plantilla.titulo')

@endsection