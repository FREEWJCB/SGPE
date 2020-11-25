@extends('plantilla.head')

@include('js.state')

@section('titulo','Estado')
@section('direccion_m', 'menu-open')
@section('direccion', 'active')
@section('state', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Configuración</a></li>
    <li class="breadcrumb-item"><a href="#">Dirección</a></li>
    <li class="breadcrumb-item active">Estado</li>
@endsection

@section('busqueda')

    <label for="bs_states">Estado: &nbsp;&nbsp;&nbsp;</label>
    <input name="bs_states" id="bs_states" onkeyup="mayuscula(this)"  onkeypress="return letra(event)" maxlength="255"b class="form-control mr-sm-2" type="text" placeholder="Buscar por estado" arialabel="Search" />

@endsection

@section('reporte')
<a href="{{ URL::to('imprimirEstado?export=pdf') }}" id="reporte" class="btn btn-success ml-1" target="_blank">
                <i class="fas fa-user-plus"></i>Reporte
            </a>
@endsection

@section('thead')

    <th scope="col"><center>Estado</center></th>

@endsection

@section('tbody')

    @if ($num > 0)
        @php $i=0 @endphp
        @foreach ($cons as $cons2)
            @php $i++ @endphp
            <tr>
                <th scope="row"><center>{{ $i }}</center></th>
                <td><center>{{ $cons2->states }}</center></td>
                @include('plantilla.catalogo')
            </tr>
        @endforeach
    @else
        <tr><td colspan="3">No hay datos registrados</td></tr>
    @endif

@endsection

@section('form')


    <div class="form-group">
      <label for="states"><b>Estado:</b></label>
      <input type="text" onkeyup="mayuscula(this)" required onkeypress="return letra(event)" maxlength="255" class="form-control" id="states" name="states" />
      <input type="hidden" id="states2" name="states2" />
      <small id="states_e" style="color: red"></small>

    </div>


@endsection

@section('contenido')

    @include('plantilla.tabla')

@endsection
