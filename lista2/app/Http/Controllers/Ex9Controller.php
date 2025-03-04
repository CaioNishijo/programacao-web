<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex9Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex09/ex9');
    }

    public function retornarFatorial(Request $request){
        $numero = intval($request->input('numero'));
        $fatorial = 1;

        for($i= $numero; $i > 0; $i--){
            $fatorial = $fatorial * $i;
        }

        return view('exercicios/ex09/ex9', compact('fatorial'));
    }
}
