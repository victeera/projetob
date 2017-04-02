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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','LoginController@login')->name('login');
Route::get('sair','MenuController@sair');
Route::post('auth','LoginController@autentication'); //
Route::get('menu','MenuController@menu')->middleware('auth')->name('menu');
Route::get('cadastro','MenuController@cadastro')->middleware('auth');
Route::get('vendas','LoginController@autentication')->middleware('auth');
