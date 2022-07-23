<?php

namespace App\Http\Controllers\Maestro\Alumnos;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MaestroAlumnosController extends Controller
{

    public function index()
    {
        $hijos = DB::table('users')
            ->select('users.id', 'users.name', 'users.email')
            ->where('users.users_id', '=', Auth::id())
            ->get();
        $viewData = [];
        $viewData["title"] = "Gestionar Alumnos";
        $viewData["alumno"] = json_decode($hijos, true);
        return view('maestro.gestionalumnos')->with("viewData", $viewData);
    }

    public function guardar(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'users_id' => Auth::id(),
            'puntos' => 0,
            'rol_idrol' => 4,
            'created_at' => now()
        ]);
        return back();
    }

    public function borrar($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return back();
    }

    public function editar($id)
    {
        $hijos = DB::table('users')
            ->select('users.id','users.name', 'users.email')
            ->where('users.users_id', '=', Auth::id())
            ->where('users.id', '=', $id)
            ->get();
        $viewData = [];
        $viewData["title"] = "Editar Alumno";
        $viewData["alumno"] = json_decode($hijos, true);
        return view('maestro.editaralumnos')->with("viewData", $viewData);
    }

    public function actualizar(Request $request, $id)
    {
        DB::table('users')
            ->where('id', '=', $id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
        return redirect()->route('maestro.alumnos.index');
    }




}
