@extends('../layout')
    
@section('title', 'Exercício 9')

@section('conteudo')
    <form method="POST" action="/ex9-resposta">
        @csrf          
        <div class="mb-3">
            <label for="numero" class="form-label">Digite um numero</label>
            <input type="number" id="numero" name="numero" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($fatorial)
        <h1>
            {{$fatorial}}
        </h1>
    @endisset
@endsection