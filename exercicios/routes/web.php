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
    return view('ex1');
});

Route::post('/ex1-resp', function(\Illuminate\Http\Request $request){
    $n1 = intval($request->input('n1'));
    $n2 = intval($request->input('n2'));
    $soma = $n1 + $n2;
    return view('ex1', compact('soma'));
});