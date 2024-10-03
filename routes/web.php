<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

Route::get('/', [TesteController::class, 'homePage']);

Route::get('/tabuadaTematica', [TesteController::class, 'tabuadaTematica']);

Route::get('/exercicio1', [TesteController::class, 'exercicio1']);

Route::get('/exercicio2', [TesteController::class, 'exercicio2']);

Route::get('/exercicio3', [TesteController::class, 'exercicio3']);

Route::get('/exercicio4', [TesteController::class, 'exercicio4']);