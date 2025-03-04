@extends('../layout')
    
@section('title', 'Exercício 10')

@section('conteudo')
    <form method="POST" action="/ex10-resposta">
        @csrf          
        <div class="mb-3">
            <label for="numero" class="form-label">Digite um numero</label>
            <input type="number" id="numero" name="numero" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($resultado_tabuada)
        @foreach($resultado_tabuada as $resultado)
            <h1>
                {{$resultado}}
            </h1>
        @endforeach
    @endisset
@endsection