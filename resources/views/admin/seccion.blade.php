@extends('plantilla.head')

@include('js.seccion')

@section('titulo','Sección')
@section('periodo_escolar_m', 'menu-open')
@section('periodo_escolar_o', 'active')
@section('seccion', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Configuración</a></li>
    <li class="breadcrumb-item"><a href="#">Periodo Escolar</a></li>
    <li class="breadcrumb-item active">Sección</li>
@endsection

@section('busqueda')

    <label for="bs_secciones"><b>Sección:</b> &nbsp;&nbsp;&nbsp;</label>
    <input name="bs_secciones" id="bs_secciones" onkeyup="mayuscula(this)" maxlength="10" class="form-control mr-sm-2" type="text" placeholder="Buscar por seccion" arialabel="Search" />

@endsection

@section('thead')

    <th scope="col"><center>Sección</center></th>

@endsection

@section('tbody')

    @if ($num > 0)
        @php $i=0 @endphp
        @foreach ($cons as $cons2)
            @php $i++ @endphp
            <tr>
                <th scope="row"><center>{{ $i }}</center></th>
                <td><center>{{ $cons2->secciones }}</center></td>
                @include('plantilla.catalogo')
            </tr>
        @endforeach
    @else
        <tr><td colspan="3">No hay datos registrados</td></tr>
    @endif

@endsection

@section('form')


    <div class="form-group">
      <label for="secciones"><b>Sección:</b></label>
      <input type="text" onkeyup="mayuscula(this)" maxlength="10" required class="form-control" id="secciones" name="secciones" />
      <input type="hidden" id="secciones2" name="secciones2" />
      <small id="secciones_e" style="color: red"></small>
    </div>


@endsection

@section('contenido')

    @include('plantilla.tabla')

@endsection
