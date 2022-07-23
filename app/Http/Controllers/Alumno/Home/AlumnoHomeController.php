<?php

namespace App\Http\Controllers\Alumno\Home;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AlumnoHomeController extends Controller
{

    /**
     * redirect admin after login
     *
     * //* @return \Illuminate\View\View
     */
    public function dashboard()
    {
        $viewData = [];
        $viewData["title"] = "Alumno -My Learning Coach";
        return view('alumno.dashboard')->with("viewData", $viewData);
    }

    public function miscursos()
    {
        $viewData = [];
        $viewData["title"] = "Alumno -My Learning Coach";
        $cursos = DB::table('inscripcion')
            ->join('cursos', 'inscripcion.Curso_idCurso', '=', 'cursos.idCurso')
            ->select('cursos.NombreCurso', 'cursos.FechaInicio', 'cursos.FechaFin', 'cursos.idCurso','cursos.imagenUrl')
            ->where('inscripcion.users_id', Auth::id())
            ->get();
        $viewData["cursosAlumno"] = json_decode($cursos, true);

        return view('alumno.miscursos')->with("viewData", $viewData);
    }

    public function clasificacion()
    {
        $clasificadores = DB::table('users')
            ->select('users.id', 'users.name', 'users.puntos')
            ->where('users.rol_idrol', '<>', 2)
            ->orderByDesc('users.puntos')
            ->simplePaginate(5);
        return view('alumno.clasificacion')->with("clasificadores", $clasificadores);
    }


//$query = DB::select(DB::raw("SELECT * FROM your_table"));


}
