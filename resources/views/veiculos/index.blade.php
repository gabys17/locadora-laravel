@extends('layouts.app')

@section('content')

<body>
<div class="card border">
        <div class="card-body">
            <h2 class="card-title">Listagem de Veículos</h2>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route ('veiculos.create') }}" title="Insira um Veículo"><i class="fas fa-plus-circle"></i>
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
            @endif

            @if ($countVeiculos > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Chassi</th>
                            <th>Placa</th>
                            <th>Número de portas</th>
                            <th>Cor</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($veiculos as $v)
                        <tr>
                            <td>{{ $v->Marca->nome_marca }}</td>
                            <td>{{ $v->chassi }}</td>
                            <td>{{ $v->placa }}</td>
                            <td>{{ $v->numero_portas }}</td>
                            <td>{{ $v->Cor->nome_cor }}</td>

                            <td>
                                <a href="{{ route ('veiculos.edit', $v->id)}}" class="btn btn-sn btn-warning">Edit</a><i
                                    class="fas fa-edit"></i>
                                <br>
                                <form action="{{route('veiculos.destroy', [$v->id])}}" method="POST">
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
