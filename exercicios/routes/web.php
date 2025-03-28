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

Route::get('/ex7', function(){
    return view('exercicios/ex07/ex7');
});

Route::get('/ex8', function(){
    return view('exercicios/ex08/ex8');
});

Route::get('/ex9', function(){
    return view('exercicios/ex09/ex9');
});

Route::get('/ex10', function(){
    return view('exercicios/ex10/ex10');
});

Route::get('/ex11', function(){
    return view('exercicios/ex11/ex11');
});

Route::get('/ex12', function(){
    return view('exercicios/ex12/ex12');
});

Route::get('/ex13', function(){
    return view('exercicios/ex13/ex13');
});

Route::get('/ex14', function(){
    return view('exercicios/ex14/ex14');
});

Route::get('/ex15', function(){
    return view('exercicios/ex15/ex15');
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

Route::post('/ex6-resposta', function(\Illuminate\Http\Request $request){
    $largura = intval($request->input('largura'));
    $altura = intval($request->input('altura'));
    $perimetro = $largura * 2 + $altura * 2;
    return view('exercicios/ex06/ex6', compact('perimetro'));
});

Route::post('/ex7-resposta', function(\Illuminate\Http\Request $request){
    $raio = intval($request->input('raio'));
    $perimetro = 3.14 * $raio * 2;
    return view('exercicios/ex07/ex7', compact('perimetro'));
});

Route::post('/ex8-resposta', function(\Illuminate\Http\Request $request){
    $base = intval($request->input('base'));
    $expoente = intval($request->input('expoente'));
    $resultado = $base ** $expoente;
    return view('exercicios/ex08/ex8', compact('resultado'));
});

Route::post('/ex9-resposta', function(\Illuminate\Http\Request $request){
    $metros = intval($request->input('metros'));
    $centimetros = $metros * 100;
    return view('exercicios/ex09/ex9', compact('centimetros'));
});

Route::post('/ex10-resposta', function(\Illuminate\Http\Request $request){
    $km = doubleval($request->input('km'));
    $milhas = $km * 0.621371;
    return view('exercicios/ex10/ex10', compact('milhas'));
});

Route::post('/ex11-resposta', function(\Illuminate\Http\Request $request){
    $altura = doubleval($request->input('altura'));
    $peso = intval($request->input('peso'));
    $imc = $peso / ($altura * $altura);
    return view('exercicios/ex11/ex11', compact('imc'));
});

Route::post('/ex12-resposta', function(\Illuminate\Http\Request $request){
    $preco = doubleval($request->input('preco'));
    $desconto = doubleval($request->input('desconto'));
    $preco_desconto = $preco - ($preco * $desconto / 100);
    return view('exercicios/ex12/ex12', compact('preco_desconto'));
});

Route::post('/ex13-resposta', function(\Illuminate\Http\Request $request){
    $capital = doubleval($request->input('capital'));
    $juros = doubleval($request->input('juros'));
    $periodo = doubleval($request->input('periodo'));
    $juros_simples = $capital * $juros / 100 * $periodo;
    return view('exercicios/ex13/ex13', compact('juros_simples'));
});

Route::post('/ex14-resposta', function(\Illuminate\Http\Request $request){
    $capital = doubleval($request->input('capital'));
    $juros = doubleval($request->input('juros'));
    $periodo = doubleval($request->input('periodo'));
    $juros_compostos = $capital * (1 + $juros / 100) ** $periodo;
    return view('exercicios/ex14/ex14', compact('juros_compostos'));
});

Route::post('/ex15-resposta', function(\Illuminate\Http\Request $request){
    $dias = intval($request->input('dias'));
    $horas = $dias * 24;
    $minutos = $dias * 1440;
    $segundos = $dias * 86400;
    return view('exercicios/ex15/ex15', compact('horas', 'minutos', 'segundos'));
});