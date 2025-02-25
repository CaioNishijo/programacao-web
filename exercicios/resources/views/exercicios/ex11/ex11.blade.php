@extends('../layout')
    
@section('title', 'Exercício 10')

@section('conteudo')
    <form method="POST" action="/ex11-resposta">
        @csrf          
        <div class="mb-3">
            <label for="peso" class="form-label">Peso em quilogramas</label>
            <input type="number" id="peso" name="peso" class="form-control">
        </div>

        <div class="mb-3">
            <label for="altura" class="form-label">Altura em metros</label>
            <input type="decimal" id="altura" name="altura" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($imc)   
        <h1>
            O resultado é {{$imc}}
        </h1>
    @endisset
@endsection