@extends('layout')
    
@section('title', 'Exercício 1')

@section('conteudo')
    <form method="POST" action="/ex1-resp">
        @csrf          
        <div class="mb-3">
            <label for="n1" class="form-label">Número 1</label>
            <input type="number" id="n1" name="n1" class="form-control">
        </div>
                    
        <div class="mb-3">
            <label for="n2" class="form-label">Número 2</label>
            <input type="number" id="n2" name="n2" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($soma)
        <h1>
            O valor da soma é {{$soma}}
        </h1>
    @endisset
@endsection