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

Route::get('/ex2', function(){
    return view('exercicios/ex02/ex2');
});

Route::get('/ex3', function(){
    return view('exercicios/ex03/ex3');
});

Route::get('/ex4', function(){
    return view('exercicios/ex04/ex4');
});

Route::get('/ex5', function(){
    return view('exercicios/ex05/ex5');
});

Route::get('/ex6', function(){
    return view('exercicios/ex06/ex6');
});

Route::post('/ex1-resposta', function(\Illuminate\Http\Request $request){
    $n1 = intval($request->input('n1'));
    $n2 = intval($request->input('n2'));
    $n3 = intval($request->input('n3'));
    $media = ($n1 + $n2 + $n3) / 3;
    return view('exercicios/ex01/ex1', compact('media'));
});

Route::post('/ex2-resposta', function(\Illuminate\Http\Request $request){
    $celsius = intval($request->input('celsius'));
    $fahrenheit = 1.8 * $celsius + 32;
    return view('exercicios/ex02/ex2', compact('fahrenheit'));
});

Route::post('/ex3-resposta', function(\Illuminate\Http\Request $request){
    $fahrenheit = intval($request->input('fahrenheit'));
    $celsius = ($fahrenheit - 32)/1.8;
    return view('exercicios/ex03/ex3', compact('celsius'));
});

Route::post('/ex4-resposta', function(\Illuminate\Http\Request $request){
    $largura = intval($request->input('largura'));
    $altura = intval($request->input('altura'));
    $area = $largura * $altura;
    return view('exercicios/ex04/ex4', compact('area'));
});

Route::post('/ex5-resposta', function(\Illuminate\Http\Request $request){
    $raio = intval($request->input('raio'));
    $area = 3.14 * ($raio * $raio);
    return view('exercicios/ex05/ex5', compact('area'));
});