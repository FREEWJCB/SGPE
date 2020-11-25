<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

use App\Http\Controllers\Ocupacion_LaboralController;
use App\Http\Controllers\Tipo_UsuarioController;
use App\Http\Controllers\Tipo_AlergiaController;
use App\Http\Controllers\Tipo_DiscapacidadController;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\DiscapacidadController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\ParentescoController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\ParroquiaController;
use App\Http\Controllers\Periodo_EscolarController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RepresentanteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\combo;

//reportes

use App\Http\Controllers\imprimirTiposAlergiasController;
use App\Http\Controllers\imprimirTiposUsuariosController;
use App\Http\Controllers\imprimirOcupacionLaboralController;
use App\Http\Controllers\imprimirTiposDiscapacidadController;
use App\Http\Controllers\imprimirAlergiaController;
use App\Http\Controllers\imprimirDiscapacidadController;
use App\Http\Controllers\imprimirCargoController;
use App\Http\Controllers\imprimirSeccionController;
use App\Http\Controllers\imprimirSalonController;
use App\Http\Controllers\imprimirGradoController;
use App\Http\Controllers\imprimirEstadoController;
use App\Http\Controllers\imprimirMunicipioController;
use App\Http\Controllers\imprimirEmpleadoController;
use App\Http\Controllers\imprimirUsuarioController;
use App\Http\Controllers\imprimirRepresentanteController;
use App\Http\Controllers\imprimirEstudianteController;
use App\Http\Controllers\imprimirPeriodoEscolarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     return view('index');
    // return view('admin.index');
})->name('inicio');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('Ocupacion_Laboral', Ocupacion_LaboralController::class)->except('show','edit','create');
Route::POST('/Ocupacion_Laborales', [Ocupacion_LaboralController::class,'cargar'])->name('Ocupacion_Laboral.cargar');
Route::POST('/Ocupacion_Laboral/rellenar', [Ocupacion_LaboralController::class,'mostrar'])->name('Ocupacion_Laboral.mostrar');

Route::resource('Tipo_Usuario', Tipo_UsuarioController::class)->except('show','edit','create');
Route::POST('/Tipos_Usuario', [Tipo_UsuarioController::class,'cargar'])->name('Tipo_Usuario.cargar');
Route::POST('/Tipo_Usuario/rellenar', [Tipo_UsuarioController::class,'mostrar'])->name('Tipo_Usuario.mostrar');

Route::resource('Tipo_Alergia', Tipo_AlergiaController::class)->except('show','edit','create');
Route::POST('/Tipos_Alergia', [Tipo_AlergiaController::class,'cargar'])->name('Tipo_Alergia.cargar');
Route::POST('/Tipo_Alergia/rellenar', [Tipo_AlergiaController::class,'mostrar'])->name('Tipo_Alergia.mostrar');

Route::resource('Tipo_Discapacidad', Tipo_DiscapacidadController::class)->except('show','edit','create');
Route::POST('/Tipos_Discapacidad', [Tipo_DiscapacidadController::class,'cargar'])->name('Tipo_Discapacidad.cargar');
Route::POST('/Tipo_Discapacidad/rellenar', [Tipo_DiscapacidadController::class,'mostrar'])->name('Tipo_Discapacidad.mostrar');

Route::resource('Alergia', AlergiaController::class)->except('show','edit','create');
Route::POST('/Alergias', [AlergiaController::class,'cargar'])->name('Alergia.cargar');
Route::POST('/Alergia/rellenar', [AlergiaController::class,'mostrar'])->name('Alergia.mostrar');

Route::resource('Discapacidad', DiscapacidadController::class)->except('show','edit','create');
Route::POST('/Discapacidades', [DiscapacidadController::class,'cargar'])->name('Discapacidad.cargar');
Route::POST('/Discapacidad/rellenar', [DiscapacidadController::class,'mostrar'])->name('Discapacidad.mostrar');

Route::resource('Cargo', CargoController::class)->except('show','edit','create');
Route::POST('/Cargos', [CargoController::class,'cargar'])->name('Cargo.cargar');
Route::POST('/Cargo/rellenar', [CargoController::class,'mostrar'])->name('Cargo.mostrar');

Route::resource('Seccion', SeccionController::class)->except('show','edit','create');
Route::POST('/Secciones', [SeccionController::class,'cargar'])->name('Seccion.cargar');
Route::POST('/Seccion/rellenar', [SeccionController::class,'mostrar'])->name('Seccion.mostrar');

Route::resource('Salon', SalonController::class)->except('show','edit','create');
Route::POST('/Salones', [SalonController::class,'cargar'])->name('Salon.cargar');
Route::POST('/Salon/rellenar', [SalonController::class,'mostrar'])->name('Salon.mostrar');

Route::resource('Grado', GradoController::class)->except('show','edit','create');
Route::POST('/Grados', [GradoController::class,'cargar'])->name('Grado.cargar');
Route::POST('/Grado/rellenar', [GradoController::class,'mostrar'])->name('Grado.mostrar');

Route::resource('Parentesco', ParentescoController::class)->except('show','edit','create');
Route::POST('/Parentescos', [ParentescoController::class,'cargar'])->name('Parentesco.cargar');
Route::POST('/Parentesco/rellenar', [ParentescoController::class,'mostrar'])->name('Parentesco.mostrar');

Route::resource('State', StateController::class)->except('show','edit','create');
Route::POST('/States', [StateController::class,'cargar'])->name('State.cargar');
Route::POST('/State/rellenar', [StateController::class,'mostrar'])->name('State.mostrar');

Route::resource('Municipality', MunicipalityController::class)->except('show','edit','create');
Route::POST('/Municipalitys', [MunicipalityController::class,'cargar'])->name('Municipality.cargar');
Route::POST('/Municipality/rellenar', [MunicipalityController::class,'mostrar'])->name('Municipality.mostrar');

Route::resource('Parroquia', ParroquiaController::class)->except('show','edit','create');
Route::POST('/Parroquias', [ParroquiaController::class,'cargar'])->name('Parroquia.cargar');
Route::POST('/Parroquia/rellenar', [ParroquiaController::class,'mostrar'])->name('Parroquia.mostrar');

Route::resource('Periodo_Escolar', Periodo_EscolarController::class)->except('show','edit','create');
Route::POST('/Periodos_Escolares', [Periodo_EscolarController::class,'cargar'])->name('Periodo_Escolar.cargar');
Route::POST('/Periodo_Escolar/rellenar', [Periodo_EscolarController::class,'mostrar'])->name('Periodo_Escolar.mostrar');
Route::POST('/Periodo_Escolar/empleado', [Periodo_EscolarController::class,'empleado'])->name('Periodo_Escolar.empleado');


Route::resource('Empleado', EmpleadoController::class)->except('show','edit','create');
Route::POST('/Empleados', [EmpleadoController::class,'cargar'])->name('Empleado.cargar');
Route::POST('/Empleado/rellenar', [EmpleadoController::class,'mostrar'])->name('Empleado.mostrar');

Route::resource('Usuario', UsuarioController::class)->except('show','edit','create');
Route::POST('/Usuarios', [UsuarioController::class,'cargar'])->name('Usuario.cargar');
Route::POST('/Usuario/rellenar', [UsuarioController::class,'mostrar'])->name('Usuario.mostrar');
Route::POST('/Usuario/empleado', [UsuarioController::class,'empleado'])->name('Usuario.empleado');

Route::resource('Representante', RepresentanteController::class)->except('show','edit','create');
Route::POST('/Representantes', [RepresentanteController::class,'cargar'])->name('Representante.cargar');
Route::POST('/Representante/rellenar', [RepresentanteController::class,'mostrar'])->name('Representante.mostrar');

Route::resource('Estudiante', EstudianteController::class)->except('show','edit','create');
Route::POST('/Estudiantes', [EstudianteController::class,'cargar'])->name('Estudiante.cargar');
Route::POST('/Estudiante/rellenar', [EstudianteController::class,'mostrar'])->name('Estudiante.mostrar');
Route::POST('/Estudiante/clear_a', [EstudianteController::class,'clear_a'])->name('Estudiante.clear_a');
Route::POST('/Estudiante/clear_d', [EstudianteController::class,'clear_d'])->name('Estudiante.clear_d');
Route::POST('/Estudiante/alergias', [EstudianteController::class,'alergias'])->name('Estudiante.alergias');
Route::POST('/Estudiante/discapacidades', [EstudianteController::class,'discapacidades'])->name('Estudiante.discapacidades');
Route::POST('/Estudiante/quitar_a', [EstudianteController::class,'quitar_a'])->name('Estudiante.quitar_a');
Route::POST('/Estudiante/quitar_d', [EstudianteController::class,'quitar_d'])->name('Estudiante.quitar_d');
Route::POST('/Estudiante/combobox', [EstudianteController::class,'combobox'])->name('Estudiante.combobox');

Route::POST('Persona', [EstudianteController::class,'persona'])->name('Persona.persona');

Route::resource('Inscripcion', InscripcionController::class)->except('show','edit','create');
Route::resource('Horario', HorarioController::class)->except('show','edit','create');
Route::resource('Asistencia', AsistenciaController::class)->except('show','edit','create');
Route::resource('Permiso', PermisoController::class)->except('show','edit','create');

Route::resource('combobox', combo::class)->only('store');

// Login
Route::post('logged_in', [loginController::class, 'authenticate'])->name('logged_in');

// Reportes

Route::get('/imprimirTipoAlergia', [imprimirTiposAlergiasController::class, 'imprimirTodos'])->name('imprimirTipoAlergia');
Route::get('/imprimirTipoUsuario', [imprimirTiposUsuariosController::class, 'imprimirTodos'])->name('imprimirTipoUsuario');
Route::get('/imprimirOcupacionLaboral', [imprimirOcupacionLaboralController::class, 'imprimirTodos'])->name('imprimirOcupacionLaboral');
Route::get('/imprimirTipoDiscapacidad', [imprimirTiposDiscapacidadController::class, 'imprimirTodos'])->name('imprimirTipoDiscapacidad');
Route::get('/imprimirAlergia', [imprimirAlergiaController::class, 'imprimirTodos'])->name('imprimirAlergia');
Route::get('/imprimirDiscapacidad', [imprimirDiscapacidadController::class, 'imprimirTodos'])->name('imprimirDiscapacidad');
Route::get('/imprimirCargo', [imprimirCargoController::class, 'imprimirTodos'])->name('imprimirCargo');
Route::get('/imprimirSeccion', [imprimirSeccionController::class, 'imprimirTodos'])->name('imprimirSeccion');
Route::get('/imprimirSalon', [imprimirSalonController::class, 'imprimirTodos'])->name('imprimirSalon');
Route::get('/imprimirGrado', [imprimirGradoController::class, 'imprimirTodos'])->name('imprimirGrado');
Route::get('/imprimirEstado', [imprimirEstadoController::class, 'imprimirTodos'])->name('imprimirEstado');
Route::get('/imprimirMunicipio', [imprimirMunicipioController::class, 'imprimirTodos'])->name('imprimirMunicipio');
Route::get('/imprimirEmpleado', [imprimirEmpleadoController::class, 'imprimirTodos'])->name('imprimirEmpleado');
Route::get('/imprimirUsuario', [imprimirUsuarioController::class, 'imprimirTodos'])->name('imprimirUsuario');
Route::get('/imprimirRepresentante', [imprimirRepresentanteController::class, 'imprimirTodos'])->name('imprimirRepresentante');
Route::get('/imprimirEstudiante', [imprimirEstudianteController::class, 'imprimirTodos'])->name('imprimirEstudiante');
Route::get('/imprimirPeriodoEscolar', [imprimirPeriodoEscolarController::class, 'imprimirTodos'])->name('imprimirPeriodoEscolar');

