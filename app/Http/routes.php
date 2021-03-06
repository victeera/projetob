<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/','LoginController@login');
Route::get('login','MenuController@sair');
Route::post('auth','LoginController@autentication');
Route::get('menu','MenuController@menuview')->middleware('auth')->name('menu');
Route::get('cadastro','MenuController@cadastroview')->middleware('auth')->name('cadastro');
Route::get('relatorio','MenuController@relatorioview')->middleware('auth');
Route::post('vcadastro','CadastroController@vcadastro')->middleware('auth');
Route::get('venda','VendaController@vendas')->middleware('auth')->name('venda');
Route::post('finalizado','VendaController@realiza')->middleware('auth');
Route::get('consulta.produto','ConsultaController@consultProd')->middleware('auth');
Route::get('consulta.venda','ConsultaController@consultVenda')->middleware('auth');
Route::get('relatorio.produto','RelatorioController@relatorioProd')->middleware('auth');
Route::get('relatorio.venda','RelatorioController@relatorioVenda')->middleware('auth');
Route::get('relatorio.fechamento','RelatorioController@fecharNoite')->middleware('auth');

