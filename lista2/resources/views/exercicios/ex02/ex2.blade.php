@extends('../layout')
    
@section('title', 'Exercício 1')

@section('conteudo')
    <form method="POST" action="/ex2-resposta">
        @csrf          
        <div class="mb-3">
            <label for="n1" class="form-label">Valor A</label>
            <input type="number" id="n1" name="n1" class="form-control">
        </div>
                    
        <div class="mb-3">
            <label for="n2" class="form-label">Valor B</label>
            <input type="number" id="n2" name="n2" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($array_numeros)
        @foreach($array_numeros as $numero)
            <h1>
                {{$numero}}
            </h1>
        @endforeach
    @endisset
@endsection