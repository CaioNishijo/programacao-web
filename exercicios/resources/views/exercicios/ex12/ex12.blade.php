@extends('../layout')
    
@section('title', 'Exercício 10')

@section('conteudo')
    <form method="POST" action="/ex12-resposta">
        @csrf          
        <div class="mb-3">
            <label for="preco" class="form-label">Diigte o preço do produto</label>
            <input type="decimal" id="preco" name="preco" class="form-control">
        </div>

        <div class="mb-3">
            <label for="desconto" class="form-label">Digite a porcentagem de desconto</label>
            <input type="decimal" id="desconto" name="desconto" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($preco_desconto)   
        <h1>
            O novo preço do produto pós desconto é R${{$preco_desconto}}
        </h1>
    @endisset
@endsection