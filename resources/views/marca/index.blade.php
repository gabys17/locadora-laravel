@extends('layouts.app')

@section('content')

<body>
<div class="card border">
        <div class="card-body">
            <h2 class="card-title">Listagem de Marcas</h2>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route ('marca.create') }}" title="Insira uma marca"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
            @endif

            @if ($countMarca > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CNPJ</th>
                            <th>Rua</th>
                            <th>Bairro</th>
                            <th>Número</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($marca as $m)
                        <tr>
                            <td>{{ $m->nome_marca }}</td>
                            <td>{{ $m->cnpj }}</td>
                            <td>{{ $m->rua }}</td>
                            <td>{{ $m->bairro }}</td>
                            <td>{{ $m->numero }}</td>
                            <td>{{ $m->telefone }}</td>
                            <td>{{ $m->email }}</td>

                            <td>
                                <a href="{{ route ('marca.edit', $m->id)}}" class="btn btn-sn btn-warning">Edit</a><i
                                    class="fas fa-edit"></i>
                                <br>
                                <form action="{{route('marca.destroy', [$m->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sn btn-danger">Delete</button> <i
                                        class="fas fa-trash"></i>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route ('home') }}" title="voltar"> <i
                class="fas fa-backward "></i></a>
    </div>
</body>
@endsection
