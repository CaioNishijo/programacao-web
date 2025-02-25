@extends('../layout')
    
@section('title', 'Exercício 8')

@section('conteudo')
    <form method="POST" action="/ex8-resposta">
        @csrf          
        <div class="mb-3">
            <label for="base" class="form-label">Base</label>
            <input type="number" id="base" name="base" class="form-control">
        </div>

        <div class="mb-3">
            <label for="expoente" class="form-label">Expoente</label>
            <input type="number" id="expoente" name="expoente" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($resultado)   
        <h1>
            O resultado é {{$resultado}}
        </h1>
    @endisset
@endsection