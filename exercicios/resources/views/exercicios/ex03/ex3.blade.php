@extends('../layout')
    
@section('title', 'Exercício 1')

@section('conteudo')
    <form method="POST" action="/ex3-resposta">
        @csrf          
        <div class="mb-3">
            <label for="fahrenheit" class="form-label">Temperatura em graus fahreheit</label>
            <input type="number" id="fahrenheit" name="fahrenheit" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($celsius)
        <h1>
            O valor da temperatura em celsius é {{$celsius}} °C
        </h1>
    @endisset
@endsection