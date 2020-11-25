<center>
    @include('plantilla.titulo')
    {{-- <h1>Gestionar @yield('titulo')</h1> --}}

    {{-- <br /> --}}

    <!-- busqueda -->
    <nav class="navbar navbar-light">
        <h3>Buscar:</h3>
        <form name="form" id="form" class="form-inline">
            @csrf
            @yield('busqueda')

            <a href="#" data-toggle="dropdown" id="nuevo" class="btn btn-info btncolorblanco">
                <i class="fas fa-user-plus"></i> Nuevo
            </a>
            
            @yield('reporte')
              
        </form>
    </nav>
    <!-- catalogo -->

    <table border="0" class="table table-striped">
        <thead class="thead-dark">
            @yield('thead2','')
            <tr>
                <th width="3%" scope="col"><center>#</center></th>
                @yield('thead')
                <th width="15%" scope="col"><center>Opcción</center></th>
            </tr>
        </thead>
        <tbody id="agrega-registros">
            @yield('tbody')
        </tbody>
    </table>

</center>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog @yield('modal')">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo"></h5> <br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @yield('ventanas')
            <form id="formulario" name="formulario" class="formulario"  onsubmit='return agregaRegistro();'>
                @csrf
                <div id="alert_e"></div>
                <input type="hidden" id="id" name="id" />
                <input type="hidden" id="pro" name="pro" />
                <div class="modal-body">
                    @yield('form')
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-danger" id="lim" value="Limpiar" />
                    <input type="submit" class="btn btn-primary" id="reg" value="Registrar" />
                    <input type="submit" class="btn btn-warning" id="edi" value="Editar" />
                </div>
            </form>
        </div>
    </div>
</div>
