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
        $consulta2 = Produtos::where('name', $request->get("name"))->get();
        $aux2 = count($consulta2);
            $venda = new Vendas();
            $venda->name = $request->get("name");
            $venda->quantidade = $request->get("quantidade");
            $venda->tipo = $request->get("tipo");
            $venda->preco = $consulta2[0]->precount * $request->get("quantidade");
            $venda->save();

        if ($aux2 > 0) {
            if ($consulta2[0]->quantidade != 0) {
                $newqtd = Produtos::find($consulta2[0]->id);
                $newqtd->quantidade = ($consulta2[0]->quantidade) - ($request->get("quantidade"));
                $newqtd->save();
            }
        }
        $msg = "Venda realizada";
        return redirect()->route('venda', compact('msg'));
    }

}