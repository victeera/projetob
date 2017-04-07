<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

use App\Http\Requests;

class VendaController extends Controller
{

    public function vendas()
    {
    	  $vendas = Produtos::all();
    	  $produto = count($vendas);
        if ($produto > 0) {
        	   return view('venda' , compact('vendas'));
        }else{
        	  $msg = "Nao existe produtos cadastrados";
	        return view('venda' , compact('msg'));
        }
    }
}
