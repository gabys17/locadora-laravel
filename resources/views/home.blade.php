@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="cards">
        <div class="card" style="width: 16rem;">
            <img class="card-img-top" src="{{ asset('resources/pictures/colors.jpeg') }}" alt="Cores">
            <div class="card-body">
              <h5 class="card-title">Listagem de Cores</h5>
              <p class="card-text">Acesse, insira ou edite aqui as cores disponíveis para os veículos.</p>
              <a href="{{ route('cor.index')}}" class="btn btn-primary">Listagem de cores</a>
            </div>
        </div>
        <div class="card" style="width: 16rem;">
            <img class="card-img-top" src="{{ asset('/resources/pictures/brands.png') }}" alt="Marcas">
            <div class="card-body">
              <h5 class="card-title">Marcas</h5>
              <p class="card-text">Acesse, insira ou edite  aqui as marcas disponíveis de veículos.</p>
              <a href="{{ route('marca.index')}}" class="btn btn-primary">Listagem de marcas</a>
            </div>
        </div>
        <div class="card" style="width: 16rem;">
            <img class="card-img-top" src="{{ asset('/resources/pictures/cars.jpg') }}" alt="Veículos">
            <div class="card-body">
              <h5 class="card-title">Veículos</h5>
              <p class="card-text">Acesse, insira ou edite  aqui os veículos disponíveis em sua locadora.</p>
              <a href="{{ route('veiculos.index')}}" class="btn btn-primary">Listagem de veículos</a>
            </div>
        </div>
    </div>

</div>
@endsection
