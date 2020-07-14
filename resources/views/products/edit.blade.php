
@extends('template.layout') 


@section('content')

<h1>Atualizar Produto</h1>
<form action="{{route('products.update', ['product' => $product->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT") <!-- Laravel manda para o método correto -->

    <div class="form-group">
        <label>Nome do Produto:</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label>Descrição:</label>
            <input type="text" name="description" class="form-control" value="{{$product->description}}">
    </div>

    <div class="form-group">
        <label>Mínimo:</label>
            <input type="text"  name="amount_min" class="form-control" value="{{$product->amount_min}}">
    </div>

    <div class="form-group">
        <label>Quantidade:</label>
            <input type="text"  name="amount" class="form-control" value="{{$product->amount}}">
    </div>

    <div class="form-group">
        <label>Fornecedor</label>
        <select name="providers[]" class="form-control" >
            @foreach ($providers as $p)
                 <option value="{{$p->id}}"
                    >{{$p->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-success">
            Atualizar Produto
        </button>
    </div>
</form>
<hr>

@endsection
