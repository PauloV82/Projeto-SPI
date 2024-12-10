@extends('layouts.navbar')

@section('title', 'Quartos')
@section('function')
<button class="pfl">
    <a href="/reservas"><i class="fa-solid fa-user"></i></a>
</button>
@endsection
@section('content')
@section('title-section', 'Quartos Disponíveis')

        <div class="rooms-list row justify-content-center mt-3">
            @foreach($quartos as $quarto)
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #2a353f;">
                        <img src="{{ asset('img/' . $quarto->imagem) }}" class="card-img-top" alt="Imagem do {{ $quarto->nome }}">
                        <div class="card-body text-white">
                            <strong><h5 class="card-title">{{ $quarto->nome }}</h5></strong>
                            <p class="card-text">{{ $quarto->descricao }}</p>
                            <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($quarto->preco, 2, ',', '.') }}</p>
                            <form action="{{ route('reservas.store', $quarto->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="button">Reservar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
