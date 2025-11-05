<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobrenos', [SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function () {return 'Login';})->name('site.login');

// App
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function () {return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function () {return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function () {return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.teste');

Route::fallback(function (){
    echo 'Não existe';
});



