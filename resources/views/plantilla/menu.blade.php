<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block @yield('inicio2')">
            <a href="index3.html" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block @yield('perfil')">
            <a href="#" class="nav-link">Perfil</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block @yield('inscripcion2')">
            <a href="#" class="nav-link">Inscripción</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block @yield('horario2')">
            <a href="#" class="nav-link">Horario</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block @yield('asistencia2')">
            <a href="#" class="nav-link">Asistencia</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block @yield('permiso2')">
            <a href="#" class="nav-link">Permiso</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('images/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('inicio') }}" class="nav-link @yield('inicio')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview @yield('inscripcion_m')">
                    <a href="#" class="nav-link @yield('inscripcion_o')">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Inscripción
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Periodo_Escolar.index') }}" class="nav-link @yield('periodo_escolar')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Periodo Escolar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Representante.index') }}" class="nav-link @yield('representante')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Representante</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Estudiante.index') }}" class="nav-link @yield('estudiante')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Estudiante</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Inscripcion.index') }}" class="nav-link @yield('inscripcion')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inscripción</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview @yield('horario_m')">
                    <a href="#" class="nav-link @yield('horarios')">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Horarios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Horario.index') }}" class="nav-link @yield('horario')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Horario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Asistencia.index') }}" class="nav-link @yield('asistencia')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Asistencia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Permiso.index') }}" class="nav-link @yield('permiso')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Permisos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview @yield('empleado_m')">
                    <a href="#" class="nav-link @yield('empleado_o')">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            Empleado
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Empleado.index') }}" class="nav-link @yield('empleado')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Empleado</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Usuario.index') }}" class="nav-link @yield('usuario')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuario</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">CONFIGURACIÓN</li>
                <li class="nav-item has-treeview @yield('direccion_m')">
                    <a href="#" class="nav-link @yield('direccion')">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>
                            Dirección
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('State.index') }}" class="nav-link @yield('state')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Estado</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Municipality.index') }}" class="nav-link @yield('municipality')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Municipio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Parroquia.index') }}" class="nav-link @yield('parroquia')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Parroquia</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview @yield('empleado_m')">
                    <a href="#" class="nav-link @yield('empleado_o')">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Empleado
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Cargo.index') }}" class="nav-link @yield('cargo')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cargo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Tipo_Usuario.index') }}" class="nav-link @yield('tipo_usuario')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tipo de usuario</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview @yield('periodo_escolar_m')">
                    <a href="#" class="nav-link @yield('periodo_escolar_o')">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Periodo Escolar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Seccion.index') }}" class="nav-link @yield('seccion')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sección</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Salon.index') }}" class="nav-link @yield('salon')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Salon</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Grado.index') }}" class="nav-link @yield('grado')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Grado</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview @yield('representante_m')">
                    <a href="#" class="nav-link @yield('representante_o')">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Representante
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Ocupacion_Laboral.index') }}" class="nav-link @yield('ocupacion_laboral')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ocupación laboral</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Parentesco.index') }}" class="nav-link @yield('parentesco')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Parentesco</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview @yield('estudiante_m')">
                    <a href="#" class="nav-link @yield('estudiante_o')">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Estudiante
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Tipo_Alergia.index') }}" class="nav-link @yield('tipo_alergia')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tipo de alergia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Tipo_Discapacidad.index') }}" class="nav-link @yield('tipo_discapacidad')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tipo de discapacidad</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Alergia.index') }}" class="nav-link @yield('alergia')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Alergia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Discapacidad.index') }}" class="nav-link @yield('discapacidad')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Discapacidad</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
