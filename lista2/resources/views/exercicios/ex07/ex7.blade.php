@extends('../layout')
    
@section('title', 'Exercício 7')

@section('conteudo')
    <form method="POST" action="/ex7-resposta">
        @csrf          
        <div class="mb-3">
            <label for="numero" class="form-label">Digite um numero</label>
            <input type="number" id="numero" name="numero" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($soma)
        <h1>
            {{$soma}}
        </h1>
    @endisset
@endsection