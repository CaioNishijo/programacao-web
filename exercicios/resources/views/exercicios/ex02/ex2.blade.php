@extends('../layout')
    
@section('title', 'Exercício 1')

@section('conteudo')
    <form method="POST" action="/ex2-resposta">
        @csrf          
        <div class="mb-3">
            <label for="celsius" class="form-label">Temperatura em graus celsius</label>
            <input type="number" id="celsius" name="celsius" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($fahrenheit)
        <h1>
            O valor da temperatura em fahrenheit é {{$fahrenheit}} °F
        </h1>
    @endisset
@endsection