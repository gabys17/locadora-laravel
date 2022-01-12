@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="{{ route ('marca.update', $marca->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nome_marca">Nome</label>
                <input type="text" class="form-control" name="nome_marca" value="{{$marca->nome_marca}}" id="nome_marca"
                    placeholder="Nome da Marca">
            </div>
            <div class="form-group">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" value="{{$marca->cnpj}}" id="cnpj"
                    placeholder="CNPJ">
            </div>
            <div class="form-group">
                <label for="rua">Rua</label>
                <input type="text" class="form-control" name="rua" value="{{$marca->rua}}" id="rua"
                    placeholder="Rua">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" value="{{$marca->bairro}}" id="bairro"
                    placeholder="Bairro">
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero" value="{{$marca->numero}}" id="numero"
                    placeholder="Número">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="{{$marca->telefone}}" id="telefone"
                    placeholder="Telefone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{$marca->email}}" id="email"
                    placeholder="Email">
            </div>
            <button type="submit" class="btn btn-sm btn-success">Salvar</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('marca.index') }}" title="voltar"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>
@endsection

