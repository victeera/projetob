<?php

namespace App\Http\Controllers;

use App\Produtos;
use App\Vendas;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ConsultaController extends Controller
{
    public function consultProd(){
        $produtos = Produtos::all();
        setlocale(LC_ALL, "pt_BR", "ptb");
        $user = Auth::user();
        return view('consulta', compact('produtos'))->with('users', $user);

    }
    public function consultVenda(){
        $vendas = Vendas::all();
        setlocale(LC_ALL, "pt_BR", "ptb");
        $user = Auth::user();
        return view('consultavenda', compact('vendas'))->with('users', $user);

    }
}
