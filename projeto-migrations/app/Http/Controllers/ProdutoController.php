<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Http\Controllers\redirect;
use App\Http\Controllers\compact;
use App\Models\Categoria;
use App\Models\Produto;
use Exception;
use Illuminate\Support\Facades\Log;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::with('categoria')->get();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Produto::create($request->all());
            return redirect()->route('produtos.index')->with('success', 'Produto criado');
        }catch(Exception $e){
            Log::log('Erro ao criar produto: '.$e -> getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);

            return redirect()->route('produtos.index')->with('failure', 'Erro ao criar categoria');
        }   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::all();
        return view ("produtos.edit", compact('produto', 'categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::all();
        return view ("produtos.edit", compact('produto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $produto = Produto::findOurFail($id);
            $produto->update($request->all());
            return redirect()->route('produto.index')->with('success', 'produto editado com sucesso');
        }catch(Exception $e){
            Log::log('Erro ao editar produto: '.$e -> getMessage(), [
                'stack' => $e->getTraceAsString(),
                'produto_id' => $id,
                'request' => $request->all()
            ]);

            return redirect()->route('produtos.index')->with('failure', 'Erro ao editar produto');
        }   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $produto = Produto::findOurFail($id);
            $produto->delete();
            return redirect()->route('produto.index')->with('success', 'produto excluído com sucesso');
        }catch(Exception $e){
            Log::log('Erro ao editar produto: '.$e -> getMessage(), [
                'stack' => $e->getTraceAsString(),
                'produto_id' => $id
            ]);

            return redirect()->route('produtos.index')->with('failure', 'Erro ao excluir produto');
        }   
    }
}
