@extends('../layout')
    
@section('title', 'Exercício 3')

@section('conteudo')
    <form method="POST" action="/ex3-resposta">
        @csrf          
        <div class="mb-3">
            <label for="preco" class="form-label">Preço do produto</label>
            <input type="decimal" id="preco" name="preco" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($preco)
        <h1>
            R${{$preco}}
        </h1>
    @endisset
@endsection