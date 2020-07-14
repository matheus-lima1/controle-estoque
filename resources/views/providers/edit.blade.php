
@extends('template.layout') 


@section('content')

<h1>Atualizar Fornecedor</h1>
<form action="{{route('providers.update', ['provider' => $provider->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT") <!-- Laravel manda para o método correto -->

    <div class="form-group">
        <label>Fornecedor:</label>
            <input type="text" name="name" class="form-control" value="{{$provider->name}}">
    </div>
    <div class="form-group">
        <label>Telefone:</label>
            <input type="text" name="phone" class="form-control" value="{{$provider->phone}}">
    </div>

    <div class="form-group">
        <label>E-mail:</label>
            <input type="text"  name="email" class="form-control" value="{{$provider->email}}">
    </div>

    <div class="form-group">
        <label>Endereço:</label>
            <input type="text"  name="address" class="form-control" value="{{$provider->address}}">
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-success">
            Atualizar Fornecedor
        </button>
    </div>
</form>
<hr>

@endsection
