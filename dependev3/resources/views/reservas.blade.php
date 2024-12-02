@extends('layouts.navbar')

@section('title', 'Quartos')
    @section('function')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-bt">logout</button>
    </form>
    @endsection
@section('content')
@section('title-section', 'Suas Reservas')

        @if($reservas->isEmpty())
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center">
                    <p class="text-white fs-4">Você não possui reservas no momento.</p>
                </div>
            </div>
        @else
            <div class="rooms-list row justify-content-center mt-3">
                @foreach($reservas as $reserva)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="background-color: #2a353f;">
                            <img src="{{ asset('img/' . $reserva->quarto->imagem) }}" class="card-img-top" alt="Imagem do {{ $reserva->quarto->nome }}">
                            <div class="card-body text-white">
                                <strong><h5 class="card-title">{{ $reserva->quarto->nome }}</h5></strong>
                                <p class="card-text">Data da Reserva: {{ $reserva->created_at->format('d/m/Y H:i') }}</p>
                                <p class="card-text">{{ $reserva->quarto->descricao }}</p>
                                <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button-cancel">Cancelar Reserva</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection