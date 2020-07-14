
@extends('template.layout')


@section('content')
    <h1>Criar Fornecedor</h1>
    <form action="{{route('providers.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nome Fornecedor</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">

            @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">

            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}">

            @error('address')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Criar Fornecedor</button>
        </div>
    </form>
@endsection

