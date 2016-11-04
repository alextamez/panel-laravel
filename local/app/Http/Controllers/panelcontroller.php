<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuario;

class panelcontroller extends Controller
{
    public function show ()
    {
    	$usuarios = Usuario::all();
    	//dd($usuarios);

    	return view('panel')->with('usuarios', $usuarios);
    }

    public function delete (Request $request)
    {
        $info = $request->all();

        $usuario = Usuario::destroy($info['id']);
        return response()->json($usuario);

    	//return response()->json(['mensaje' => 'Hola como estas soy el id: ' . $info['id']]);
    }

    public function create (Request $request)
    {
        //
    }
}
