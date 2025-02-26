<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex3Controller extends Controller
{
    public function abrirFormulario(){
        return view('exercicios/ex03/ex3');
    }

    public function retornarPreco(Request $request){
        $preco = intval($request->input('preco'));

        if($preco > 100){
            $preco = $preco - ($preco * 15 / 100);
        }

        return view('exercicios/ex03/ex3', compact('preco'));
    }
}
