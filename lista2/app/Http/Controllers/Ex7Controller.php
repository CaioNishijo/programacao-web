<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex7Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex07/ex7');
    }

    public function retornarSoma(Request $request){
        $numero = intval($request->input('numero'));
        $soma = 0;

        for($i = 0; $i <= $numero; $i++){
            $soma = $soma + $i;
        }

        return view('exercicios/ex07/ex7', compact('soma'));
    }
}
