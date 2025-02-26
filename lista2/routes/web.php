<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ex1Controller;
use App\Http\Controllers\Ex2Controller;
use App\Http\Controllers\Ex3Controller;
use App\Http\Controllers\Ex4Controller;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/ex1', [Ex1Controller::class, 'abrirFormulario']);
Route::post('/ex1-resposta', [Ex1Controller::class, 'retornarSomaOuTriplo']);

Route::get('/ex2', [Ex2Controller::class, 'abrirFormulario']);
Route::post('/ex2-resposta', [Ex2Controller::class, 'retornarNumeros']);

Route::get('/ex3', [Ex3Controller::class, 'abrirFormulario']);
Route::post('/ex3-resposta', [Ex3Controller::class, 'retornarPreco']);

Route::get('/ex4', [Ex4Controller::class, 'abrirFormulario']);
Route::post('/ex4-resposta', [Ex4Controller::class, 'retornarPrimos']);

Route::get('/ex5', [Ex4Controller::class, 'abrirFormulario']);
Route::post('/ex5-resposta', [Ex4Controller::class, 'retornarMes']);