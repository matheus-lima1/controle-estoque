
@extends('template.layout')


@section('content')
    <h1>Criar Produto</h1>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Mínimo</label>
            <input type="text" name="amount_min" class="form-control @error('amount_min') is-invalid @enderror" value="{{old('amount_min')}}">

            @error('amount_min')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="text" name="amount" class="form-control @error('amount') is-invalid @enderror" value="{{old('amount')}}">

            @error('amount')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Fornecedor</label>
            <select name="providers[]" class="form-control" >
                @foreach ($providers as $p)
                     <option value="{{$p->id}}">{{$p->name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
        </div>
    </form>
@endsection

