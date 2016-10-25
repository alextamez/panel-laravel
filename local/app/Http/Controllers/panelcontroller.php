<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuario;

class panelcontroller extends Controller
{
    public function show (Request $request)
    {
    	$usuarios = Usuario::all();
    	//dd($usuarios);

    	return view('panel')->with('usuarios', $usuarios);
    }

    public function delete ($id)
    {
    	dd($id);
    }
}
