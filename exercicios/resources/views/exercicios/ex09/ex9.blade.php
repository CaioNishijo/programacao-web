@extends('../layout')
    
@section('title', 'Exercício 9')

@section('conteudo')
    <form method="POST" action="/ex9-resposta">
        @csrf          
        <div class="mb-3">
            <label for="metros" class="form-label">Valor em metros</label>
            <input type="number" id="metros" name="metros" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($centimetros)   
        <h1>
            O resultado é {{$centimetros}}cm
        </h1>
    @endisset
@endsection