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
    	return redirect('panel')->with('usuarios', $usuarios);
    }
}
