<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex6Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex06/ex6');
    }

    public function retornarNumeros(Request $request){
        $numero = intval($request->input('numero'));
        $numeros = [];

        for($i = 0; $i <= $numeros; $i++){
            array_push($numeros, $i);
        }

        return view('exercicios/ex06/ex6', compact('numeros'));
    }
}
