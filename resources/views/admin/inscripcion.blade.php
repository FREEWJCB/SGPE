@extends('plantilla.head')

@include('js.inscripcion')

@section('titulo','Inscripción')
@section('inscripcion_m', 'menu-open')
@section('inscripcion_o', 'active')
@section('inscripcion', 'active')
@section('inscripcion2', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Inscripción</a></li>
    <li class="breadcrumb-item active">Inscripción</li>
@endsection

@section('contenido')
    @include('plantilla.titulo')

@endsection