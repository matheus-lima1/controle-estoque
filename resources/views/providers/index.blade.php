
@extends('template.layout') 

@section('content')
    <a href="{{route('providers.create')}}" class="btn btn-lg btn-success">Criar Fornecedor</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Fornecedor</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($providers as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->phone}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->address}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('providers.edit',['provider' => $p->id])}}" class="btn btn-sm btn-primary">EDITAR</a>

                            <form action="{{route('providers.destroy',['provider' => $p->id])}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                            </form>

                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection