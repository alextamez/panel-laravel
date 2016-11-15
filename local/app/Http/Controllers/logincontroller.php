<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{

    public function auth (Request $request)
    {
    	$info = $request->all();

    	$email = $info['email'];
    	$password = $info['password'];

    	$usuarios = DB::table('usuarios')
			    	->where('email', '=', $email)
			    	->where('password', '=', $password)
			    	->get();

    	//dd($usuarios);

		if ($usuarios->count() > 0)
		{
			//Aqui crear las variables de sesion
			return redirect('panel');

		}else{

			return redirect('login')->with('status', 'El usuario o password son incorrectos. Por favor intente nuevamente.');
		}
    	
    }
}
