@extends('layouts.forms')

@section('title', 'Login')
    
@section('content')

<div class="login">
    <form action="/login" method="POST">
        @csrf
        <h1>Entrar</h1>
        <div class="input-box">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" placeholder="Senha" required>
            <i class="fa-solid fa-lock"></i>
        </div>
        <button class="btnf" type="submit">Entrar</button>
        <div class="criate">Não tem uma conta? <a href="{{ route('register') }}">Registre-se</a></div>
    </form>
    </div>

    
    @endsection

