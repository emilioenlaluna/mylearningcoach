<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class ForosController extends Controller
{

    public function foros()
    {
        $dudas = DB::table('dudas')
        ->select('dudas.titulo', 'dudas.fecha','dudas.id')
        ->orderBy('dudas.fecha')
            ->simplePaginate(10);
        $viewData = [];
        $viewData["titulo"] = "Foros Publicos";
        $viewData["subtitulo"] = "Ayuda Respondiendo Dudas";
        return view('foros.dudas', ["viewData" => $viewData, 'dudas' => $dudas]);
    }

    public function foro($id)
    {
        $duda = DB::table('dudas')
        ->select('dudas.titulo', 'dudas.fecha','dudas.mensaje')
        ->where('dudas.id',$id)
        ->get();
        $respuestas = DB::table('respuestas')
        ->select('respuestas.titulorespuesta', 'respuestas.mensaje','respuestas.fecha')
        ->where('respuestas.dudas_id',$id)
        ->orderByDesc('respuestas.fecha')
            ->simplePaginate(10);
        $viewData = [];
        $viewData["titulo"] = "Detalles Duda";
        $viewData["subtitulo"] = "Duda";
        $viewData["duda"] = $id;
        return view('foros.duda', ["viewData" => $viewData, 'duda' => $duda,'respuestas'=>$respuestas]);
    }






}
