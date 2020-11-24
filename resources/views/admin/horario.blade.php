@extends('plantilla.head')

@include('js.horario')

@section('titulo','Horario')
@section('horario_m', 'menu-open')
@section('horarios', 'active')
@section('horario', 'active')
@section('horario2', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Horarios</a></li>
    <li class="breadcrumb-item active">Horario</li>
@endsection

@section('contenido')
    @include('plantilla.titulo')

@endsection