<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController')->name('site.index');
Route::get('/sobrenos', 'SobreNosController')->name('site.sobrenos');
Route::get('/contato', 'ContatoController')->name('site.contato');
Route::get('/login', function () {return 'Login';})->name('site.login');

// App
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function () {return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function () {return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function () {return 'Produtos';})->name('app.produtos');
});

Route::get('rota1', function(){}->name('site.rota1'));
Route::get('rota2', function(){}->name('site.rota2'));

