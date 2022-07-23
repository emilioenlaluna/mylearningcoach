<?php

namespace App\Http\Controllers\Padres\Hijos;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PadresResumenController extends Controller
{

    public function alumnos()
    {
        $hijos = DB::table('users')
            ->select('users.id', 'users.name')
            ->where('users.users_id', '=', Auth::id())
            ->get();
        $viewData = [];
        $viewData["title"] = "Gestionar Hijos";
        $viewData["hijo"] = json_decode($hijos, true);
        return view('padres.resumenhijos')->with("viewData", $viewData);
    }

    public function detalles($id)
    {
       $evaluaciones = DB::table('respuesta')
            ->join('pregunta', 'respuesta.pregunta_idPreguntas', '=', 'pregunta.idPreguntas')
            ->select('pregunta.Pregunta','pregunta.Respuesta_correcta' , 'respuesta.respuesta','pregunta.Respuesta1','pregunta.Respuesta2')
            ->where('respuesta.users_id', '=', $id)
            ->get();
        $viewData = [];
        $viewData["title"] = "Gestionar Hijos";
        $viewData["evaluaciones"] = json_decode($evaluaciones, true);
        return view('padres.detallesresumen')->with("viewData", $viewData);
    }

}
