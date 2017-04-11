<?php

namespace App\Http\Controllers;

use App\Produtos;
use App\Venda;
use App\Vendas;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class VendaController extends Controller
{

    public function vendas()
    {
        $user = Auth::user();
        $vendas = Produtos::all();
       $id = array_pluck($vendas, ['id'] );
        $keys = array_pluck($vendas, ['quantidade']);
       if($keys == 0){
        $a = Produtos::find('id', $id);
           $a->delete();
       }
        $produto = count($vendas);
        if ($produto > 0) {
            return view('venda', compact('vendas'))->with('users', $user);
        } else {
            $msg = "Nao existe produtos cadastrados";
            return view('venda', compact('msg'))->with('users', $user);
        }
    }

    public function realiza(Requests\VendaRequest $request)
    {
        $consulta = Vendas::where('name', $request->get("name"))->get();
        $aux = count($consulta);
        $consulta2 = Produtos::where('name', $request->get("name"))->get();
        if ($aux == 0) {
            $venda = new Vendas();
            $venda->name = $request->get("name");
            $venda->quantidade = $request->get("quantidade");
            $venda->preco = $consulta2[0]->precount * $request->get("quantidade");
            $venda->save();
        } else {
            $venda = Vendas::find($consulta[0]->id);
            $venda->quantidade = $consulta[0]->quantidade + $request->get("quantidade");
            $valora = $consulta2[0]->precount * $request->get("quantidade");
            $venda->preco = $consulta[0]->preco + $valora ;
            $venda->save();
        }


        if ($aux >= 1) {
            if ($consulta2[0]->quantidade != 0) {
                $newqtd = Produtos::find($consulta2[0]->id);
                $newqtd->quantidade = ($consulta2[0]->quantidade) - ($request->get("quantidade"));
                $newqtd->save();
            }
        }
        return redirect()->route('venda');
    }

}