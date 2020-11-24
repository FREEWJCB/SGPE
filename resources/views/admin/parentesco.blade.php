@extends('plantilla.menu')

@include('js.parentesco')

@section('titulo','Parentesco')
@section('representante_m', 'menu-open')
@section('representante_o', 'active')
@section('parentesco', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Configuración</a></li>
    <li class="breadcrumb-item"><a href="#">Representante</a></li>
    <li class="breadcrumb-item active">Parentesco</li>
@endsection

@section('busqueda')

    <label for="bs_parentescos"><b>Parentesco:</b> &nbsp;&nbsp;&nbsp;</label>
    <input name="bs_parentescos" id="bs_parentescos" onkeyup="mayuscula(this)" onkeypress="return letra(event)" maxlength="255" class="form-control mr-sm-2" type="text" placeholder="Buscar por parentesco" arialabel="Search" />

@endsection

@section('thead')

    <th scope="col"><center>Parentesco</center></th>

@endsection

@section('tbody')

    @if ($num > 0)
        @php $i=0 @endphp
        @foreach ($cons as $cons2)
            @php $i++ @endphp
            <tr>
                <th scope="row"><center>{{ $i }}</center></th>
                <td><center>{{ $cons2->parentescos }}</center></td>
                @include('plantilla.catalogo')
            </tr>
        @endforeach
    @else
        <tr><td colspan="3">No hay datos registrados</td></tr>
    @endif

@endsection

@section('form')


    <div class="form-group">
      <label for="parentescos"><b>Parentesco:</b></label>
      <input type="text" onkeyup="mayuscula(this)" onkeypress="return letra(event)" maxlength="255" required class="form-control" id="parentescos" name="parentescos" />
      <input type="hidden" id="parentescos2" name="parentescos2" />
      <small id="parentescos_e" style="color: red"></small>
    </div>


@endsection

@section('contenido')

    @include('plantilla.tabla')

@endsection
