@extends('../layout')
    
@section('title', 'Exercício 15')

@section('conteudo')
    <form method="POST" action="/ex15-resposta">
        @csrf          
        <div class="mb-3">
            <label for="dias" class="form-label">Diigte uma quantidade de dias</label>
            <input type="number" id="dias" name="dias" class="form-control">
        </div>   
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($horas)   
        <h1>
            {{$horas}} horas
        </h1>
    @endisset
    @isset($minutos)   
        <h1>
           {{$minutos}} minutos
        </h1>
    @endisset
    @isset($segundos)   
        <h1>
           {{$segundos}} segundos
        </h1>
    @endisset
@endsection