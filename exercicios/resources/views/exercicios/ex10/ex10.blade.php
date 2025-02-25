@extends('../layout')
    
@section('title', 'Exercício 10')

@section('conteudo')
    <form method="POST" action="/ex10-resposta">
        @csrf          
        <div class="mb-3">
            <label for="km" class="form-label">Valor em quilômetros</label>
            <input type="number" id="km" name="km" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($milhas)   
        <h1>
            O resultado é {{$milhas}} milhas
        </h1>
    @endisset
@endsection