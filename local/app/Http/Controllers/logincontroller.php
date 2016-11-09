<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{
    public function auth (Request $request)
    {
    	$info = $request->all();
    	dd($info);
    }
}
