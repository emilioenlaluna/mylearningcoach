<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


/* *******************************************
 * HOME
 ******************************************** */

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/Nosotros', 'App\Http\Controllers\HomeController@nosotros')->name("home.nosotros");

Route::get('/Categorias', 'App\Http\Controllers\CursosController@categorias')->name("cursos.categorias");

Route::get('/Cursos', 'App\Http\Controllers\CursosController@cursos')->name("cursos.cursos");

Route::get('/Categorias/{id}/Cursos', 'App\Http\Controllers\CursosController@cursosDeCategoria')->name("cursos.cursoscategoria");

Route::get('/DatalleCurso/{id}', 'App\Http\Controllers\CursosController@detalles')->name("cursos.detalles");


/* *******************************************
 * USUARIO
 ******************************************** */

Route::middleware(['auth', 'verified'])->group(function () {
    //Route::get('/Usuario', 'App\Http\Controllers\UsuarioController@index')->name("usuario.index");
//Route::get('/Usuario/GuardarDatos', 'App\Http\Controllers\UsuarioController@guardarDatos')->name("usuario.guardarDatos");
//Route::get('/Usuario/ActualizarCredenciales', 'App\Http\Controllers\UsuarioController@actualizarCredenciales')->name("usuario.actualizarCredenciales");
//Route::get('/Usuario/GuardarCredenciales', 'App\Http\Controllers\UsuarioController@guardarCredenciales')->name("usuario.guardarCredenciales");
});

/* *******************************************
 * ALUMNO
 ******************************************** */

Route::middleware(['alumno'])->group(function () {

    Route::get('/alumno/dashboard', 'App\Http\Controllers\Alumno\Home\AlumnoHomeController@dashboard')->name('alumno.dashboard');

    Route::get('/alumno/miscursos', 'App\Http\Controllers\Alumno\Home\AlumnoHomeController@miscursos')->name('alumno.miscursos');

    Route::get('/alumno/miscursos/curso/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@curso')->name('alumno.curso');

    Route::get('/Curso/Leccion/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@leccion')->name("alumno.leccion");

    Route::get('/alumno/tutorias', 'App\Http\Controllers\Alumno\Tutorias\AlumnoTutoriasController@tutorias')->name('alumno.tutorias');

    Route::post('/alumno/tutorias/guardar', 'App\Http\Controllers\Alumno\Tutorias\AlumnoTutoriasController@guardar')->name("admin.tutorias.guardar");

    Route::delete('/alumno/tutorias/{id}/borrar', 'App\Http\Controllers\Alumno\Tutorias\AlumnoTutoriasController@borrar')->name("admin.tutorias.borrar");

    Route::get('/alumno/clasificacion', 'App\Http\Controllers\Alumno\Home\AlumnoHomeController@clasificacion')->name('alumno.clasificacion');

    Route::get('/alumno/miscursos/curso/leccion/foro/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@foroLeccion')->name('alumno.curso.foro.leccion');

    Route::post('/alumno/miscursos/curso/leccion/foro/mensaje', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@enviarMensaje')->name('alumno.curso.foro.enviarMensaje');

    Route::get('/alumno/miscursos/curso/leccion/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@leccion')->name('alumno.curso.leccion');

    Route::get('/alumno/miscursos/curso/evaluacion/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@evaluacion')->name('alumno.curso.evaluacion');

    Route::post('/alumno/inscribir/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@inscribir')->name('alumno.inscribir');


});

///* *******************************************
// * CURSOS
// ******************************************** */
//
//
//Route::get('/Curso/{id}', 'App\Http\Controllers\AlumnoController@puntaje')->name("alumno.puntaje");
//Route::get('/Curso/Leccion/{id}', 'App\Http\Controllers\AlumnoController@puntaje')->name("alumno.puntaje");
//Route::get('/Curso/Leccion/Material/{id}', 'App\Http\Controllers\AlumnoController@puntaje')->name("alumno.puntaje");
//Route::get('/Curso/Leccion/Evaluacion/{id}', 'App\Http\Controllers\AlumnoController@puntaje')->name("alumno.puntaje");
//Route::get('/Curso/Leccion/Evaluacion/Pregunta/{id}', 'App\Http\Controllers\AlumnoController@puntaje')->name("alumno.puntaje");
//Route::post('/Curso/Leccion/Tarea/{id}/Enviar', 'App\Http\Controllers\AlumnoController@puntaje')->name("alumno.puntaje");
//
//
//

/* *******************************************
 * TUTOR
 ******************************************** */

Route::middleware(['tutor', 'auth'])->group(function () {
//Route::get('/Tutor/CursoTutoria', 'App\Http\Controllers\TutorController@curso')->name("tutor.curso");
//Route::get('/Tutor/Tutorias', 'App\Http\Controllers\TutorController@tutorias')->name("tutor.tutorias");
//Route::get('/Tutor/DetalleTutoria/{id}', 'App\Http\Controllers\TutorController@tutorias')->name("tutor.tutorias");
//Route::post('/Tutor/SolicitarTutoria', 'App\Http\Controllers\TutorController@tutorias')->name("tutor.tutorias");
});


/* *******************************************
 * MAESTRO
 ******************************************** */

Route::middleware(['maestro', 'auth'])->group(function () {

    Route::get('/Maestro', 'App\Http\Controllers\Maestro\Home\MaestroHomeController@dashboard')->name("maestro.home.dashboard");

    Route::get('/Maestro/Alumno/Inicio', 'App\Http\Controllers\Maestro\Alumnos\MaestroAlumnosController@index')->name("maestro.alumnos.index");

    Route::post('/Maestro/Alumno/Guardar', 'App\Http\Controllers\Maestro\Alumnos\MaestroAlumnosController@guardar')->name("maestro.alumnos.guardar");

    Route::delete('/Maestro/Alumno/{id}/Borrar', 'App\Http\Controllers\Maestro\Alumnos\MaestroAlumnosController@borrar')->name("maestro.alumnos.borrar");

    Route::get('/Maestro/Alumno/{id}/Editar', 'App\Http\Controllers\Maestro\Alumnos\MaestroAlumnosController@editar')->name("maestro.alumnos.editar");

    Route::put('/Maestro/Alumno/{id}/Actualizar', 'App\Http\Controllers\Maestro\Alumnos\MaestroAlumnosController@actualizar')->name("maestro.alumnos.actualizar");

    Route::get('/Maestro/Alumno/{id}/Editar', 'App\Http\Controllers\Maestro\Alumnos\MaestroAlumnosController@editar')->name("maestro.alumnos.editar");

    Route::get('/Maestro/Alumno/Cursos', 'App\Http\Controllers\Maestro\Alumnos\MaestroCursosController@cursos')->name("maestro.cursos");


//Route::get('/Maestro', 'App\Http\Controllers\Admin\MaestroController@index')->name("maestro.home.index");
//Route::get('/Maestro/Cursos', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
//Route::post('/Maestro/Cursos/Guardar', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
//Route::delete('/Maestro/Cursos/{id}/Borrar', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
//Route::get('/Maestro/Cursos/{id}/Editar', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
//Route::put('/Maestro/Cursos/{id}/Actualizar', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
//
//
//Route::get('/Maestro/Cursos/{id}', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
//Route::get('/Maestro/Cursos/Leccion/{id}', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
//Route::post('/Maestro/Cursos/Leccion/Guardar', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
//Route::delete('/Maestro/Cursos/Leccion/{id}/Borrar', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
//Route::get('/Maestro/Cursos/Leccion/{id}/Editar', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
//Route::put('/Maestro/Cursos/Leccion/{id}/Actualizar', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
});

/* *******************************************
 * PADRES
 ******************************************** */

Route::middleware(['padres', 'auth'])->group(function () {

    Route::get('/Padres', 'App\Http\Controllers\Padres\Home\PadresHomeController@dashboard')->name("padres.home.dashboard");

    Route::get('/Padres/Acerca', 'App\Http\Controllers\Padres\Home\PadresHomeController@about')->name("padres.home.about");

    Route::get('/Padres/Alumno/Inicio', 'App\Http\Controllers\Padres\Hijos\PadresHijosController@index')->name("padres.hijos.index");

    Route::post('/Padres/Alumno/Guardar', 'App\Http\Controllers\Padres\Hijos\PadresHijosController@guardar')->name("padres.hijos.guardar");

    Route::delete('/Padres/Alumno/{id}/Borrar', 'App\Http\Controllers\Padres\Hijos\PadresHijosController@borrar')->name("padres.hijos.borrar");

    Route::get('/Padres/Alumno/{id}/Editar', 'App\Http\Controllers\Padres\Hijos\PadresHijosController@editar')->name("padres.hijos.editar");

    Route::put('/Padres/Alumno/{id}/Actualizar', 'App\Http\Controllers\Padres\Hijos\PadresHijosController@actualizar')->name("padres.hijos.actualizar");

    Route::get('/Padres/Alumno/Resumen', 'App\Http\Controllers\Padres\Hijos\PadresResumenController@alumnos')->name("padres.hijos.resumen");

    Route::get('/Padres/Alumno/Detalle/{id}', 'App\Http\Controllers\Padres\Hijos\PadresResumenController@detalles')->name("padres.hijos.detalle");

    Route::post('/Padres/InscripcionCurso/', 'App\Http\Controllers\Padres\Hijos\PadresHijosController@inscribir')->name("padres.inscribir");


});


/* *******************************************
 * FOROS PUBLICOS
 ******************************************** */

Route::get('/Foros', 'App\Http\Controllers\ForosController@foros')->name("foros.todos");

Route::get('/Foro/{id}', 'App\Http\Controllers\ForosController@foro')->name("foros.duda");

Route::middleware(['auth'])->group(function () {

    Route::post('/Foro/Escribir', 'App\Http\Controllers\ForosController@escribir')->name("foros.escribir");
});


/* *******************************************
* ADMINISTRADORES
******************************************** */

Route::middleware(['admin', 'auth'])->group(function () {

});


/* *******************************************
* RUTAS DE AUTH
******************************************** */

Auth::routes(['verify' => true]);




