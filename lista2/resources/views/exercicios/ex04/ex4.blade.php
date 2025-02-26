@extends('../layout')
    
@section('title', 'Exercício 4')

@section('conteudo')
    <form method="POST" action="/ex4-resposta">
        @csrf          
        <div class="mb-3">
            <label for="numero" class="form-label">Digite um numero</label>
            <input type="decimal" id="numero" name="numero" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($numeros_primos)
        @foreach($numeros_primos as $numero)
            <h1>
                {{$numero}}
            </h1>
        @endforeach
    @endisset
@endsection