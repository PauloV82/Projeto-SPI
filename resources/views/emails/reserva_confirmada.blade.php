<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Reserva</title>
</head>
<body>
    <h1>Confirmação de Reserva</h1>
    <p>Olá {{ $reserva->user->name }},</p>
    <p>Sua reserva foi confirmada com sucesso!</p>
    <p><strong>Quarto:</strong> {{ $reserva->quarto->nome }}</p>
    <p><strong>Descrição:</strong> {{ $reserva->quarto->descricao }}</p>
    <p><strong>Data e Hora da Reserva:</strong> {{ $reserva->data_hora_reserva->format('d/m/Y H:i') }}</p>
    <p>Obrigado por escolher o Elysian Waves!</p>
</body>
</html>
