<?php

namespace App\Http\Controllers\Padres\Hijos;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PadresHijosController extends Controller
{

    public function index()
    {
        $hijos = DB::table('users')
            ->select('users.id', 'users.name', 'users.email')
            ->where('users.users_id', '=', Auth::id())
            ->get();
        $viewData = [];
        $viewData["title"] = "Gestionar Hijos";
        $viewData["hijo"] = json_decode($hijos, true);
        return view('padres.gestionhijos')->with("viewData", $viewData);
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
        $viewData["title"] = "Editar Hijo";
        $viewData["hijo"] = json_decode($hijos, true);
        return view('padres.editarhijos')->with("viewData", $viewData);
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
        return redirect()->route('padres.hijos.index');
    }


    public function inscribir(Request $request)
    {
        $inscrito = DB::table('inscripcion')
            ->where('inscripcion.Curso_idCurso', $request->input('curso'))
            ->where('inscripcion.users_id', $request->input('hijo'))
            ->count();
        if ($inscrito != 0) {
            return back()->with('errors','Alumno Ya Inscrito');
        }

        DB::table('inscripcion')->insert([
            'Curso_idCurso' => $request->input('name'),
            'users_id' => $request->input('email')
        ]);

        return redirect()->route('padres.hijos.index');
    }


}
