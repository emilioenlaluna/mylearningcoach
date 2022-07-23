<?php

namespace App\Http\Controllers\Alumno\Tutorias;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AlumnoTutoriasController extends Controller
{
    public function tutorias()
    {
        $viewData = [];
        $viewData["title"] = "Alumno -My Learning Coach";
        $solicitudtutoria= DB::table('solicitudtutoria')
            ->select('solicitudtutoria.idSolicitudTutoria', 'solicitudtutoria.Detalles', 'solicitudtutoria.Hora_Solicitada','solicitudtutoria.estado')
            ->where('solicitudtutoria.users_id', Auth::id())
            ->get();

        $cursos = DB::table('inscripcion')
            ->join('cursos', 'inscripcion.Curso_idCurso', '=', 'cursos.idCurso')
            ->select('cursos.NombreCurso','cursos.idCurso')
            ->where('inscripcion.users_id', Auth::id())
            ->get();

        $viewData["solicitudtutoria"]=json_decode($solicitudtutoria, true);
        $viewData["cursos"]=json_decode($cursos, true);
        return view('alumno.tutorias')->with("viewData", $viewData);
    }

    public function guardar(Request $request)
    {
        DB::table('solicitudtutoria')->insert([
            'Detalles' => $request->input('detalles'),
            'Hora_Solicitud' => now(),
            'Hora_Solicitada' => $request->input('hora'),
            'users_id' => Auth::id(),
            'estado'=> 'solicitado',
            'tutordelcurso_curso_idCurso'=>$request->input('curso')
        ]);
        return back();
    }

    public function borrar($id)
    {
        //Product::destroy($id);
        DB::table('solicitudtutoria')->where('idSolicitudTutoria', '=', $id)->delete();
        return back();
    }

}
