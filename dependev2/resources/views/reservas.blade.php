<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Elysian Waves</title>
</head>
<body>
    <div class="container contt">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center text-white mt-5">Suas Reservas</h1>
                <p class="text-white text-center fs-5">Veja seus quartos reservados</p>
                <div class="row justify-content-center mt-5">
                    <div class="col-12 text-center">
                        <a class="resv" href="{{ route('quartos.index') }}">Quartos</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <h2 class="title-container">Quartos Reservados</h2>
                <div class="progress mx-5 px-5 mt-4" style="height: 2px; background-color: #16212e;">
                    <div class="barr mx-5"></div>
                </div>
            </div>
        </div>

        @if($reservas->isEmpty())
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center">
                    <p class="text-white fs-4">Você não possui reservas no momento.</p>
                </div>
            </div>
        @else
            <div class="row justify-content-center mt-3">
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
                                    <button type="submit" class="btn btn-danger" style="color: antiquewhite">Cancelar Reserva</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
