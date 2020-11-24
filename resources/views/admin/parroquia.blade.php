@extends('plantilla.menu')

@include('js.parroquia')

@section('titulo','Parroquia')
@section('direccion_m', 'menu-open')
@section('direccion', 'active')
@section('parroquia', 'active')

@section('busqueda')

    <label for="bs_state"><b></b>Estado: &nbsp;&nbsp;&nbsp;</label>
    <select class="form-control mr-sm-2" required id="bs_state" name="bs_state">
      <option class="form-control mr-sm-2" value="" selected>Seleccione el estado</option>
      @if ($num_state>0)
        @foreach ($state as $state2)
            <option value="{{ $state2->id }}">{{ $state2->states }}</option>
        @endforeach
      @endif

    </select>

    <label for="bs_municipality"><b></b>Municipio: &nbsp;&nbsp;&nbsp;</label>
    <select class="form-control mr-sm-2" required id="bs_municipality" name="bs_municipality">
      <option class="form-control mr-sm-2" value="" selected>Seleccione el municipio</option>
    </select>

    <label for="bs_parroquias"><b></b>Parroquia: &nbsp;&nbsp;&nbsp;</label>
    <input name="bs_parroquias" id="bs_parroquias" onkeyup="mayuscula(this)" onkeypress="return letra(event)" maxlength="255" class="form-control mr-sm-2" type="text" placeholder="Buscar por parroquias" arialabel="Search"/>

@endsection

@section('thead')

    <th scope="col"><center>Estado</center></th>
    <th scope="col"><center>Municipio</center></th>
    <th scope="col"><center>Parroquia</center></th>

@endsection

@section('tbody')

    @if ($num > 0)
        @php $i=0 @endphp
        @foreach ($cons as $cons2)
            @php $i++ @endphp
            <tr>
                <th scope="row"><center>{{ $i }}</center></th>
                <td><center>{{ $cons2->states }}</center></td>
                <td><center>{{ $cons2->municipalitys }}</center></td>
                <td><center>{{ $cons2->parroquias }}</center></td>
                @include('plantilla.catalogo')
            </tr>
        @endforeach
    @else
        <tr><td colspan="4">No hay datos registrados</td></tr>
    @endif

@endsection

@section('form')

    <div class="form-group">
      <label for="state"><b>Estado:</b></label>
      <select class="form-control" required id="state" name="state">
        <option value="null" disabled selected>Seleccione el estado</option>
        @if ($num_state>0)
            @foreach ($state as $state2)
                <option value="{{ $state2->id }}">{{ $state2->states }}</option>
            @endforeach
        @endif
      </select>
      <input type="hidden" id="state2" name="state2" />
      <small id="state_e" style="color: red"></small>
    </div>

    <div class="form-group">
      <label for="municipality"><b>Municipio:</b></label>
      <select class="form-control" required id="municipality" name="municipality">
        <option value="null" disabled selected>Seleccione el municipio</option>
      </select>
      <input type="hidden" id="municipality2" name="municipality2" />
      <small id="municipality_e" style="color: red"></small>
    </div>

    <div class="form-group">
      <label for="parroquias"><b>Parroquia:</b></label>
      <input type="text" class="form-control" onkeyup="mayuscula(this)" onkeypress="return letra(event)" maxlength="255" required id="parroquias" name="parroquias" />
      <input type="hidden" id="parroquias2" name="parroquias2" />
      <small id="parroquias_e" style="color: red"></small>
    </div>

@endsection

@section('contenido')

    @include('plantilla.tabla')

@endsection
