<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', 'LoginController@login');
Route::post('cadastrar-usuario', "UserController@cadastrar");

Route::group(["middleware" => ['apiJWT']],function (){
    //Amostragem
    Route::post('cadastrar-amostragem','AmostragemController@cadastrar');
    Route::post('editar-amostragem','AmostragemController@EditarAmostragem');
    Route::get('buscar-feijao','AmostragemController@buscarFejao');
    Route::get('buscar-sorgo','AmostragemController@buscarSorgo');
    Route::get('buscar-milho','AmostragemController@buscarMilho');
    Route::get('buscar-soja','AmostragemController@buscarSoja');

    //Classificacao
    Route::post('cadastrar-classificacao','ClassificacaoController@cadastrar');

    //Usuario
    Route::get('mostrar-usuario','UserController@MostrarUsuario');
    Route::post('editar-usuario','UserController@EditarUsuario');
});




