@extends('../layout')
    
@section('title', 'Exercício 1')

@section('conteudo')
    <form method="POST" action="/ex1-resposta">
        @csrf          
        <div class="mb-3">
            <label for="n1" class="form-label">Nota 1</label>
            <input type="number" id="n1" name="n1" class="form-control">
        </div>
                    
        <div class="mb-3">
            <label for="n2" class="form-label">Nota 2</label>
            <input type="number" id="n2" name="n2" class="form-control">
        </div>

        <div class="mb-3">
            <label for="n3" class="form-label">Nota 3</label>
            <input type="number" id="n3" name="n3" class="form-control">
        </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($media)
        <h1>
            O valor da média é {{$media}}
        </h1>
    @endisset
@endsection