<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroRequest;
use App\Produtos;
use Illuminate\Http\Request;

use App\Http\Requests;

class CadastroController extends Controller
{
   public function vcadastro(CadastroRequest $request){

   	if(isset($request)){
        $produto = new Produtos();
        $produto->name = $request->name;
        $produto->quantidade = $request->quantidade;
        $produto->precount = $request->precount;
        $produto->precobalde = $request->precobalde;
        $produto->tipo = $request->tipo;
        $produto->save();
        $msg = "Cadastro efetuado com sucesso";
        return redirect()->route('cadastro')->with('msg', $msg);
    }else {
        $msg = "Insira dados válidos";
        return redirect()->route('cadastro')->with('msg', $msg);
    }
   }
}
