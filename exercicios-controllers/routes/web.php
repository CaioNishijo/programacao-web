<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ex1Controller;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/ex1', [Ex1Controller::class, 'abrirFormulario']);

Route::post('/ex1-resposta', [Ex1Controller::class, 'retornarSomaOuTriplo']);