<?php

namespace App\Http\Controllers\Maestro\Cursos;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MaestroCursosController extends Controller
{


    public function index()
    {
        $hijos = DB::table('cursos')
            ->select('cursos.idCurso','cursos.NombreCurso', 'cursos.FechaInicio', 'cursos.FechaFin', 'cursos.imagenUrl', 'cursos.Visible')
            ->where('cursos.users_id', '=', Auth::id())
            ->get();
        $viewData = [];
        $viewData["title"] = "Gestionar Cursos";
        $viewData["cursos"] = json_decode($hijos, true);
        return view('maestro.cursos')->with("viewData", $viewData);
    }

    public function guardar(Request $request)
    {
        DB::table('cursos')->insert([
            'NombreCurso' => $request->input('name'),
            'FechaInicio' => $request->input('fechainicio'),
            'FechaFin' => $request->input('fechafin'),
            'Visible' => $request->input('visible'),
            'imagenUrl' => $request->input('url'),
            'Categoria_idCategoria' => $request->input('categoria'),
            'users_id' => Auth::id()
        ]);
        return back();
    }


}
