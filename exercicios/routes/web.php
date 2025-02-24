<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', function(){
    return view('exercicios/ex01/ex1');
});

Route::post('/ex1-resposta', function(\Illuminate\Http\Request $request){
    $n1 = intval($request->input('n1'));
    $n2 = intval($request->input('n2'));
    $n3 = intval($request->input('n3'));
    $media = ($n1 + $n2 + $n3) / 3;
    return view('exercicios/ex01/ex1', compact('media'));
});