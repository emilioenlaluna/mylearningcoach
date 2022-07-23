<?php

namespace App\Http\Controllers\Padres\Home;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PadresHomeController extends Controller
{

    public function dashboard()
    {
        $viewData = [];
        $viewData["title"] = "Alumno -My Learning Coach";
        return view('padres.dashboard')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Como funciona MLC vista";
        return view('padres.about')->with("viewData", $viewData);
    }


}
