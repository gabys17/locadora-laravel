@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="{{ route('cor.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome_cor">Nome da Cor</label>
                <input type="text" class="form-control" name="nome_cor" id="nome_cor"
                    placeholder="Nome da Cor" required>
            </div>
            <button type="submit" class="btn btn-sm btn-success">Salvar</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('cor.index') }}" title="Voltar"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>

@endsection
