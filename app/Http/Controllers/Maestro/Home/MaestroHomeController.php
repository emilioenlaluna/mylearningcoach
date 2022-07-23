<?php

namespace App\Http\Controllers\Maestro\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaestroHomeController extends Controller
{
    public function dashboard()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        return view('maestro.dashboard')->with("viewData", $viewData);
    }


}
