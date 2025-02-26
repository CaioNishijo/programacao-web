<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex4Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex04/ex4');
    }

    public function retornarPrimos(Request $request){
        $numero = intval($request->input('numero'));
        $numeros_primos = [];

        for($i = 1; $i <= $numero; $i++){
            $contador = 0;
            for($j = 1; $j <= $i; $j++){
                if($i % $j == 0){
                    $contador++;
                }
            }
            if($contador <= 2){
                array_push($numeros_primos, $i);
            }
        }

        return view('exercicios/ex04/ex4', compact('numeros_primos'));
    }
}
