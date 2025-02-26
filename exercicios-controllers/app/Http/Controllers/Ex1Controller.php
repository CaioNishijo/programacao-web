<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex1Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex01/ex1');
    }

    public function retornarSomaOuTriplo(Request $request){
        $n1 = intval($request->input('n1'));
        $n2 = intval($request->input('n2'));

        if($n1 == $n2){
            $soma = ($n1 + $n2) * 3;
        } else{
            $soma = $n1 + $n2;
        }

        return view('exercicios/ex01/ex1', compact('soma'));
    }
}
