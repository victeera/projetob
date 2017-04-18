<?php

namespace App\Http\Controllers;

use App\Produtos;
use App\Vendas;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class RelatorioController extends Controller
{
    public function relatorioProd(){
        setlocale(LC_ALL, "pt_BR", "ptb");
        $produtos = Produtos::all();

        return SnappyPdf::loadView('relatorio', ['produtos'=>$produtos])->stream('relatorio.pdf');
    }

    public function relatorioVenda(){
        setlocale(LC_ALL, "pt_BR", "ptb");
        $vendas = Vendas::all();
        return SnappyPdf::loadView('relatoriovendas', ['vendas'=>$vendas])->stream('relatorio.pdf');
    }

    public function fecharNoite(){
        setlocale(LC_ALL, "pt_BR", "ptb");
        $valor = Vendas::all()->sum('preco');
        $quantidadeC = Vendas::all()->sum('quantidade');
        $pdf = SnappyPdf::loadView('fimnoite', compact('valor'), compact('quantidadeC'));
        $venda = Vendas::all();
        $new = count($venda);
        if($new > 0) {
            DB::table('vendas')->delete();
        }
        return $pdf->stream('relatorio.pdf');
    }
}
