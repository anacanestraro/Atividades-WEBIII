<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Cliente;

Route::get('/', [TesteController::class, 'homePage']);

Route::get('/tabuadaTematica', [TesteController::class, 'tabuadaTematica']);

Route::get('/exercicio1', [TesteController::class, 'exercicio1']);

Route::get('/exercicio2', [TesteController::class, 'exercicio2']);

Route::get('/exercicio3', [TesteController::class, 'exercicio3']);

Route::get('/exercicio4', [TesteController::class, 'exercicio4']);

Route::get('/exercicio5', [TesteController::class, 'exercicio5']);

Route::get('/exercicio6', [TesteController::class, 'exercicio6']);

Route::get('/exercicio7', [TesteController::class, 'exercicio7']);

Route::get('/exercicio8', [TesteController::class, 'exercicio8']);

Route::get('/exercicio9', [TesteController::class, 'exercicio9']);

Route::get('/exercicio10', [TesteController::class, 'exercicio10']);

Route::get('/exercicio11', [TesteController::class, 'exercicio11']);

Route::get('/cadastrarCliente', [Cliente::class, 'create']);
Route::post('/cadastrarCliente', [Cliente::class, 'store']);
Route::get('/listarCliente', [Cliente::class, 'index']);
Route::delete('/deletarCliente/{id}', [Cliente::class, 'destroy']);
