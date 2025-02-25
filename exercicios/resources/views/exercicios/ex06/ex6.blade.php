@extends('../layout')
    
@section('title', 'Exercício 4')

@section('conteudo')
    <form method="POST" action="/ex4-resposta">
        @csrf          
        <div class="mb-3">
            <label for="largura" class="form-label">Largura</label>
            <input type="number" id="largura" name="largura" class="form-control">
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Altura</label>
            <input type="number" id="altura" name="altura" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($perimetro)   
        <h1>
            O valor da área do retângulo é {{$perimetro}} m
        </h1>
    @endisset
@endsection