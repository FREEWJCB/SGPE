@extends('plantilla.menu')

@include('js.salon')

@section('titulo','Salon')
@section('periodo_escolar_m', 'menu-open')
@section('periodo_escolar_o', 'active')
@section('salon', 'active')

@section('address')
    <li class="breadcrumb-item"><a href="#">Configuración</a></li>
    <li class="breadcrumb-item"><a href="#">Periodo Escolar</a></li>
    <li class="breadcrumb-item active">Salon</li>
@endsection

@section('busqueda')

    <label for="bs_salones"><b></b>Salon: &nbsp;&nbsp;&nbsp;</label>
    <input name="bs_salones" id="bs_salones" onkeyup="mayuscula(this)" maxlength="10" class="form-control mr-sm-2" type="text" placeholder="Buscar por salon" arialabel="Search" />

@endsection

@section('thead')

    <th scope="col"><center>Salon</center></th>

@endsection

@section('tbody')

    @if ($num > 0)
        @php $i=0 @endphp
        @foreach ($cons as $cons2)
            @php $i++ @endphp
            <tr>
                <th scope="row"><center>{{ $i }}</center></th>
                <td><center>{{ $cons2->salones }}</center></td>
                @include('plantilla.catalogo')
            </tr>
        @endforeach
    @else
        <tr><td colspan="3">No hay datos registrados</td></tr>
    @endif

@endsection

@section('form')


    <div class="form-group">
      <label for="salones"><b>Salon:</b></label>
      <input type="text" onkeyup="mayuscula(this)" maxlength="10" required class="form-control" id="salones" name="salones" />
      <input type="hidden" id="salones2" name="salones2" />
      <small id="salones_e" style="color: red"></small>
    </div>


@endsection

@section('contenido')

    @include('plantilla.tabla')

@endsection
