@extends('../layout')
    
@section('title', 'Exercício 5')

@section('conteudo')
    <form method="POST" action="/ex5-resposta">
        @csrf          
        <div class="mb-3">
            <label for="raio" class="form-label">Raio do círculo</label>
            <input type="number" id="raio" name="raio" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($area)   
        <h1>
            O valor da área do círculo é {{$area}} m²
        </h1>
    @endisset
@endsection