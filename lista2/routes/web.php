<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ex1Controller;
use App\Http\Controllers\Ex2Controller;
use App\Http\Controllers\Ex3Controller;
use App\Http\Controllers\Ex4Controller;
use App\Http\Controllers\Ex5Controller;
use App\Http\Controllers\Ex6Controller;
use App\Http\Controllers\Ex7Controller;
use App\Http\Controllers\Ex8Controller;
use App\Http\Controllers\Ex9Controller;
use App\Http\Controllers\Ex10Controller;


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

Route::get('/ex5', [Ex5Controller::class, 'abrirFormulario']);
Route::post('/ex5-resposta', [Ex5Controller::class, 'retornarMes']);

Route::get('/ex6', [Ex6Controller::class, 'abrirFormulario']);
Route::post('/ex6-resposta', [Ex6Controller::class, 'retornarNumeros']);

Route::get('/ex7', [Ex7Controller::class, 'abrirFormulario']);
Route::post('/ex7-resposta', [Ex7Controller::class, 'retornarSoma']);

Route::get('/ex8', [Ex8Controller::class, 'abrirFormulario']);
Route::post('/ex8-resposta', [Ex8Controller::class, 'retornarContagem']);

Route::get('/ex9', [Ex9Controller::class, 'abrirFormulario']);
Route::post('/ex9-resposta', [Ex9Controller::class, 'retornarFatorial']);

Route::get('/ex10', [Ex10Controller::class, 'abrirFormulario']);
Route::post('/ex10-resposta', [Ex10Controller::class, 'retornarTabuada']);