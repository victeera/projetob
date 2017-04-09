<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class VendaController extends Controller
{

    public function vendas()
    {
        $user = Auth::user();
    	  $vendas = Produtos::all();
    	  $produto = count($vendas);
        if ($produto > 0) {
        	   return view('venda' , compact('vendas'))->with('users',$user);
        }else{
        	  $msg = "Nao existe produtos cadastrados";
	        return view('venda' , compact('msg'));
        }
    }
}
