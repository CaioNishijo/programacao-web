<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex2Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex02/ex2');
    }

    public function retornarNumeros(Request $request){
        $a = intval($request->input('n1'));
        $b = intval($request->input('n2'));
        $array_numeros = [];

        if($a > $b){
            for($b; $b <= $a; $b++){
                array_push($array_numeros, $b);
            } 
        } else if($b > $a){
            for($a; $a <= $b; $a++){
                array_push($array_numeros, $a);
            }  
        } else if($b == $a){
            array_push($array_numeros, $a);
        }

        return view('exercicios/ex02/ex2', compact('array_numeros'));
    }
}
