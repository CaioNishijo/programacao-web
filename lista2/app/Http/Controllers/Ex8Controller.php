<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex8Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex08/ex8');
    }

    public function retornarContagem(Request $request){
        $numero = intval($request->input('numero'));
        $contagem = [];

        do{
            array_push($contagem, $numero);

            $numero--;
        }while($numero != 0);

        return view('exercicios/ex08/ex8', compact('contagem'));
    }
}
