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
    public function vendaview()
    {
        $user = Auth::user();
        return view('venda')->with('users', $user);


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

    public function vendas()
    {
        $venda = Produtos::all();
        $produto = count($venda);
        if ($produto > 0) {
            return redirect()->route('venda')->with('vendas', $venda);
        }
    }
}
