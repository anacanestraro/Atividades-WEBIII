<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Lista1;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\GoogleLoginController;

Route::get('/', [TesteController::class, 'homePage'])->name('homePage')->middleware(['auth']);
Route::get('/tabuadaTematica', [TesteController::class, 'tabuadaTematica'])->name('tabuadaTematica');

Route::get('/navbar', [TesteController::class, 'navbar']);
Route::get('/lista1', [Lista1::class, 'lista1'])->name('lista1');;
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

Route::get('/cadastrarCliente', [Cliente::class, 'create'])->middleware(['auth'])->name('cadastrarCliente');;
Route::post('/cadastrarCliente', [Cliente::class, 'store']);
Route::get('/listarCliente', [Cliente::class, 'index']);
Route::delete('/deletarCliente/{id}', [Cliente::class, 'destroy']);
Route::get('/editarCliente/{id}', [Cliente::class, 'edit']);
Route::put('/editarCliente/{id}', [Cliente::class, 'update']);
Route::get('/mostrarCliente/{id}', [Cliente::class, 'show']);

Route::resource('Categorias', CategoriaController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
