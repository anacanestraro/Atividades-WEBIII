<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Lista1;
use App\Http\Controllers\Cliente;

Route::get('/', [TesteController::class, 'homePage']);
Route::get('/tabuadatematica', [TesteController::class, 'tabuadatematica']);

Route::get('/lista1', [Lista1::class, 'lista1']);
Route::get('/exercicio1', [Lista1::class, 'exercicio1']);
Route::get('/exercicio2', [Lista1::class, 'exercicio2']);
Route::get('/exercicio3', [Lista1::class, 'exercicio3']);
Route::get('/exercicio4', [Lista1::class, 'exercicio4']);
Route::get('/exercicio5', [Lista1::class, 'exercicio5']);
Route::get('/exercicio6', [Lista1::class, 'exercicio6']);
Route::get('/exercicio7', [Lista1::class, 'exercicio7']);
Route::get('/exercicio8', [Lista1::class, 'exercicio8']);
Route::get('/exercicio9', [Lista1::class, 'exercicio9']);
Route::get('/exercicio10', [Lista1::class, 'exercicio10']);
Route::get('/exercicio11', [Lista1::class, 'exercicio11']);

Route::get('/cadastrarCliente', [Cliente::class, 'create']);
Route::post('/cadastrarCliente', [Cliente::class, 'store']);
Route::get('/listarCliente', [Cliente::class, 'index']);
Route::delete('/deletarCliente/{id}', [Cliente::class, 'destroy']);
Route::get('/editarCliente/{id}', [Cliente::class, 'edit']);
Route::put('/editarCliente/{id}', [Cliente::class, 'update']);
