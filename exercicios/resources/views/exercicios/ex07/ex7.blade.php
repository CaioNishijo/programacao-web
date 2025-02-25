@extends('../layout')
    
@section('title', 'Exercício 7')

@section('conteudo')
    <form method="POST" action="/ex7-resposta">
        @csrf          
        <div class="mb-3">
            <label for="raio" class="form-label">Raio do círculo</label>
            <input type="number" id="raio" name="raio" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($perimetro)   
        <h1>
            O valor da área do círculo é {{$perimetro}} m
        </h1>
    @endisset
@endsection