@extends('../layout')
    
@section('title', 'Exercício 5')

@section('conteudo')
    <form method="POST" action="/ex5-resposta">
        @csrf          
        <div class="mb-3">
            <label for="numero" class="form-label">Digite um numero de 1 a 12</label>
            <input type="decimal" id="numero" name="numero" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($mes)
        <h1>
            {{$mes}}
        </h1>
    @endisset
@endsection