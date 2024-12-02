@extends('layouts.forms')

@section('title', 'Registro')
    
@section('content')

<div class="login">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1>Registre-se</h1>
        <div class="input-box">
            <input type="text" name="name" id="email" value="{{ old('name') }}" placeholder="Nome" required>
            <i class="fa-solid fa-address-card"></i>
        </div>
        <div class="input-box">
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" placeholder="Senha" required>
            <i class="fa-solid fa-lock"></i>
        </div>
        <div class="input-box">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmação de senha" required>
            <i class="fa-solid fa-lock"></i>
        </div>
        <button class="btnf" type="submit">Confirmar</button>
    </form>
</div>

    
    @endsection



