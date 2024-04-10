<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes Url
|--------------------------------------------------------------------------
*/

// exemplo de rota utilizando função de callback
Route::get('/', function () {
    return view('index');
});

// exemplo de rota utlizando o controlador para chamar o método
Route::get('/login',[UserController::class,'login']);

// exemplo de rota com parâmetros
Route::get('/user/{id}',[UserController::class,'user']);
