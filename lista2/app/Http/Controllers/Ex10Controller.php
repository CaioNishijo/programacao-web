<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex10Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex10/ex10');
    }

    public function retornarTabuada(Request $request){
        $numero = intval($request->input('numero'));
        $resultado_tabuada = [];

        for($i = 0; $i <= 10; $i++){
            $resultado = $i * $numero;
            array_push($resultado_tabuada, $resultado);
        }

        return view('exercicios/ex10/ex10', compact('resultado_tabuada'));
    }
}
