<?php

namespace App\Http\Controllers\Alumno\Cursos;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AlumnoCursosController extends Controller
{

    public function curso($id)
    {
        //validamos que el usuario este inscrito al curso
        $viewData = [];
        $viewData["titulo"] = "Alumno -My Learning Coach";
        $validado = DB::table('inscripcion')
            ->select('inscripcion.Curso_idCurso')
            ->where('inscripcion.Alumno_idAlumno', Auth::id())
            ->where('inscripcion.Curso_idCurso', $id)
            ->count();
        if ($validado != null || $validado != 0) {
            $leccionesCurso = DB::table('leccion')
                ->where('leccion.Curso_idCurso', $id)
                ->get();
            $viewData["leccionesCurso"] = json_decode($leccionesCurso, true);
            return view('alumno.curso')->with("viewData", $viewData);
        }
        return redirect()->intended(route('home.index'))->with("viewData", $viewData);;
    }

    public function leccion($id)
    {
        $entradasforo = DB::table('entradaforoleccion')
        ->join('users', 'inscripcion.users_id', '=', 'users.id')
        ->select('entradaforoleccion.mensaje',
            'users.name',
            'entradaforoleccion.fecha',
            'users.id',
            'inscripcion.inscripcionId')
        ->where('entradaforoleccion.foroleccion_idForoLeccion', $id)
        ->orderBy('entradaforoleccion.fecha')
        ->get();
    $viewData = [];
    $viewData["titulo"] = "Alumno -My Learning Coach";
    $viewData["entradaforo"] = json_decode($entradasforo, true);
    $viewData["idAlumno"] = Auth::id();
    $viewData["idForo"] = $id;
    return view('alumno.foroleccion')->with("viewData", $viewData);
    }

    public function foroLeccion($id)
    {
        $entradasforo = DB::table('entradaforoleccion')
            //->join('inscripcion', 'entradaforoleccion.inscripcion_inscripcionId', '=', 'inscripcion.inscripcionId')
            ->join('users', 'inscripcion.users_id', '=', 'users.id')
            ->select('entradaforoleccion.mensaje',
                'users.name',
                'entradaforoleccion.fecha',
                'users.id',
                'inscripcion.inscripcionId')
            ->where('entradaforoleccion.foroleccion_idForoLeccion', $id)
            ->orderBy('entradaforoleccion.fecha')
            ->get();
        $viewData = [];
        $viewData["titulo"] = "Alumno -My Learning Coach";
        $viewData["entradaforo"] = json_decode($entradasforo, true);
        $viewData["idAlumno"] = Auth::id();
        $viewData["idForo"] = $id;
        return view('alumno.foroleccion')->with("viewData", $viewData);
    }

    public function enviarMensaje(Request $request)
    {
        DB::table('entradaforoleccion')->insert([
            'foroleccion_idForoLeccion' => $request->input('idForo'),
            'mensaje' => $request->input('mensaje'),
            'fecha' => now(),
            'inscripcion_inscripcionId' => $request->input('inscripcion'),
        ]);
        return back();
    }


}
