@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="{{ route ('veiculos.update', $veiculos->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="id_marca">Nome da Marca</label>
                <select name="id_marca" id="id_marca">
                    @foreach($marca as $m)
                    <option value="{{ $m->id}}" {{ $m->id == $veiculos->id_marca ? 'selected' : ''}} >{{ $m->nome_marca }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="chassi">Chassi</label>
                <input type="text" class="form-control" name="chassi" value="{{$veiculos->chassi}}" id="chassi"
                    placeholder="Chassi">
            </div>
            <div class="form-group">
                <label for="placa">Placa</label>
                <input type="text" class="form-control" name="placa" value="{{$veiculos->placa}}"  id="placa"
                    placeholder="Placa">
            </div>
            <div class="form-group">
                <label for="numero_portas">Número de portas</label>
                <input type="text" class="form-control" name="numero_portas" value="{{$veiculos->numero_portas}}"  id="numero_portas"
                    placeholder="Número de portas">
            </div>
            <div class="form-group">
                <label for="id_cor">Cor</label>
                <select name="id_cor" id="id_cor">
                    @foreach($cor as $c)
                    <option value="{{ $c->id}}" {{ $c->id == $veiculos->id_cor ? 'selected' : '' }} >{{ $c->nome_cor }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-sm btn-success">Salvar</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('veiculos.index') }}" title="voltar"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>
@endsection
