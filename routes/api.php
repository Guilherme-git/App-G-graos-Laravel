<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', 'LoginController@login');
Route::post('cadastrar-usuario', "UserController@cadastrar");

Route::group(["middleware" => ['apiJWT']],function (){
    Route::post('cadastrar-amostragem','AmostragemController@cadastrar');
});




