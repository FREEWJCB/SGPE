@extends('plantilla.menu')

@include('js.ocupacion_laboral')

@section('titulo','Ocupación Laboral')
@section('representante_m', 'menu-open')
@section('representante_o', 'active')
@section('ocupacion_laboral', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Configuración</a></li>
    <li class="breadcrumb-item"><a href="#">Representante</a></li>
    <li class="breadcrumb-item active">Ocupación Laboral</li>
@endsection

@section('busqueda')

    <label for="bs_labor"><b>Labor:</b> &nbsp;&nbsp;&nbsp;</label>
    <input name="bs_labor" id="bs_labor" onkeyup="mayuscula(this)" onkeypress="return letra(event)" maxlength="255" class="form-control mr-sm-2" type="text" placeholder="Buscar por labor" arialabel="Search" />

@endsection

@section('thead')

    <th scope="col"><center>Labor</center></th>

@endsection

@section('tbody')

    @if ($num > 0)
        @php $i=0 @endphp
        @foreach ($cons as $cons2)
            @php $i++ @endphp
            <tr>
                <th scope="row"><center>{{ $i }}</center></th>
                <td><center>{{ $cons2->labor }}</center></td>
                @include('plantilla.catalogo')
            </tr>
        @endforeach
    @else
        <tr><td colspan="3">No hay datos registrados</td></tr>
    @endif

@endsection

@section('form')


    <div class="form-group">
      <label for="labor"><b>Labor:</b></label>
      <input type="text" onkeyup="mayuscula(this)" onkeypress="return letra(event)" maxlength="255" required class="form-control" id="labor" name="labor" />
      <input type="hidden" id="labor2" name="labor2" />
      <small id="labor_e" style="color: red"></small>
    </div>


@endsection

@section('contenido')

    @include('plantilla.tabla')

@endsection
