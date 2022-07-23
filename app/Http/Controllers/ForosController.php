<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ForosController extends Controller
{

    public function foros()
    {
        $dudas = DB::table('dudas')
            ->select('dudas.titulo', 'dudas.fecha', 'dudas.id')
            ->orderByDesc('dudas.fecha')
            ->simplePaginate(10);
        $viewData = [];
        $viewData["titulo"] = "Foros Publicos";
        $viewData["subtitulo"] = "Ayuda Respondiendo Dudas";
        return view('foros.dudas', ["viewData" => $viewData, 'dudas' => $dudas]);
    }

    public function foro($id)
    {
        $preguntas = DB::table('dudas')
            ->select('dudas.titulo', 'dudas.fecha', 'dudas.mensaje')
            ->where('dudas.id', $id)
            ->get();

        $respuestas = DB::table('respuestas')
            ->select('respuestas.titulorespuesta', 'respuestas.mensaje', 'respuestas.fecha')
            ->where('respuestas.dudas_id', $id)
            ->orderByDesc('respuestas.fecha')
            ->simplePaginate(10);
        $viewData = [];
        $viewData["titulo"] = "Detalles Duda";
        $viewData["subtitulo"] = "Duda";
        $viewData["dudaId"] = $id;
        $viewData["duda"] = json_decode($preguntas, true);
        return view('foros.dudavista', ["viewData" => $viewData, 'respuestas' => $respuestas]);
    }

    public function escribir(Request $request)
    {
        DB::table('respuestas')->insert([
            'dudas_id' => $request->input('dudaId'),
            'titulorespuesta' => $request->input('titulo'),
            'mensaje' => $request->input('mensaje'),
            'fecha' => now(),
            'users_id' => Auth::id()
        ]);
        return back();
    }

    public function preguntar(Request $request){
        DB::table('dudas')->insert([
            'titulo' => $request->input('titulo'),
            'mensaje' => $request->input('mensaje'),
            'fecha' => now(),
            'users_id' => Auth::id(),
            'solucionada' => 0,
        ]);
        return back();
    }

}
