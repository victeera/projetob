<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

use App\Http\Requests;

class VendaController extends Controller
{

    public function vendas()
    {   $venda = Produtos::all();
        $produto = count($venda);
        if ($produto > 0) {
            return redirect()->route('venda')->with('vendas', $venda);
        }
    }
}
