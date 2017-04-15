<?php

namespace App\Http\Controllers;

use App\Produtos;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use App\Http\Requests;



class RelatorioController extends Controller
{
    public function relatorioPDF(){
        setlocale(LC_ALL, "pt_BR", "ptb");
        $produtos = Produtos::all();
        return SnappyPdf::loadView('relatorio', ['produtos'=>$produtos])->stream('relatorio.pdf');
    }
}
