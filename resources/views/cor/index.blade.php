@extends('layouts.app')

@section('content')

<body>
    <div class="card border">
        <div class="card-body">
            <h2 class="card-title">Listagem de Cores</h2>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route ('cor.create') }}" title="Insira uma cor"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
            @endif

            @if ($countCor > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cor as $c)
                        <tr>
                            <td>{{ $c->nome_cor }}</td>

                            <td>
                                <a href="{{ route ('cor.edit', $c->id)}}" class="btn btn-sn btn-warning">Edit</a><i
                                    class="fas fa-edit"></i>
                                <br>
                                <form action="{{route('cor.destroy', [$c->id])}}" method="POST">
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
