@extends('../layout')
    
@section('title', 'Exercício 13')

@section('conteudo')
    <form method="POST" action="/ex13-resposta">
        @csrf          
        <div class="mb-3">
            <label for="capital" class="form-label">Diigte um capital</label>
            <input type="decimal" id="capital" name="capital" class="form-control">
        </div>

        <div class="mb-3">
            <label for="juros" class="form-label">Digite uma taxa de juros</label>
            <input type="decimal" id="juros" name="juros" class="form-control">
        </div>

        <div class="mb-3">
            <label for="periodo" class="form-label">Digite um período</label>
            <input type="decimal" id="periodo" name="periodo" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($juros_simples)   
        <h1>
           O valor do juro simples é R${{$juros_simples}}
        </h1>
    @endisset
@endsection