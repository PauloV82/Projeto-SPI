<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
    
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
    
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" required>
        </div>
    
        <button type="submit">Registrar</button>
    </form>
    
</body>
</html>

