<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// faltou importa a classe

class LoginController extends Controller
{
    public function  login()
    {
    	   return view('login'); // so pra exibir a view login
    }

    public function autentication(Request $request)
    {
        if (Auth::attempt(['email' => $request->get("email"), 'password' => $request->get('password')])) {
            $user = Auth::user();
            return view('home')->with('users', $user);
	     } else{
	    	   $msgerro = "Digite um email ou senha validos";
            return back()
                ->with('msgerro', $msgerro);
        }
    }
}
