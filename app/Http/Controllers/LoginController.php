<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// faltou importa a classe

class LoginController extends Controller
{
    public function  login()
    {
    	   return view('login'); // so pra exibir a view login
    }

    public function autentication(LoginRequest $loginResquet)
    {
        $credenciais = ['email' => $loginResquet->get('email') , 'password' =>  $loginResquet->get('password')];
        $user = Auth::user();
        if(Auth::attempt($credenciais)){
            return redirect()->route('menu')->with('users', $user);
        }else{
            $loginErro = 'Informe um E-mail e Senha validos';
            return back()
                ->with('loginErro', $loginErro)
                ->withInput();
        }
    }
}
