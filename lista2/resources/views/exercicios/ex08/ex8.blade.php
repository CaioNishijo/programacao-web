@extends('../layout')
    
@section('title', 'Exercício 8')

@section('conteudo')
    <form method="POST" action="/ex8-resposta">
        @csrf          
        <div class="mb-3">
            <label for="numero" class="form-label">Digite um numero</label>
            <input type="number" id="numero" name="numero" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($contagem)
        @foreach($contagem as $numero)
            <h1>
                {{$numero}}
            </h1>
        @endforeach
    @endisset
@endsection