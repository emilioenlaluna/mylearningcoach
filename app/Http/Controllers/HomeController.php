<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Categoria;


class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["titulo"] = "Inicio - My Learning Coach";
        $viewData["subtitulo"] = "Educación Gratuita";
        return view('home.index')->with("viewData", $viewData);
    }

    public function nosotros()
    {
        $viewData = [];
        $viewData["titulo"] = "Nosotros - My Learning Coach";
        $viewData["subtitulo"] = "Nosotros";
        $viewData["descripcion"] = "Plataforma educativa gratuita para fortalecer el aprendizaje...";
        $viewData["copyright"] = "Desarrollado por: Chicharron-TEK";
        $viewData["Miembro1"] = "Cristian Israel Donato Flores";
        $viewData["Miembro2"] = "Emilio Luna Pérez";
        $viewData["tech"] = "Microsoft Azure DB, Laravel, Bootsrap, CSS, BLADE:HTML5";
        return view('home.nosotros')->with("viewData", $viewData);
    }

}
