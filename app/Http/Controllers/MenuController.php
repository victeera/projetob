<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function cadastroview()
    {
        $user = Auth::user();
        return view('cadastro')->with('users', $user);

    }

    public function menuview()
    {
        $user = Auth::user();
        return view('home')->with('users', $user);

    }

    public function relatorioview()
    {
        $user = Auth::user();
        return view('relatorio')->with('users', $user);

    }

    public function sair(){
        Auth::logout();
        return view('login');
    }

    public function consulta(){
        $user = Auth::user();
        return view('consulta')->with('users', $user);
    }

}
