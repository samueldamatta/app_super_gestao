<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

// Página "Sobre nós"
Route::get('/sobrenos', [\App\Http\Controllers\SobroNosController::class, 'sobrenos']);

// Página de contato
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);


Route::get('/login', function () {return 'Login';});

Route::get('/clientes', function () {return 'Clientes';});

Route::get('/fornecedores', function () {return 'Fornecedores';});

