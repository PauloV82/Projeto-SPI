<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {return view('welcome');});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas');
    Route::get('/dashboard', function () {return view('dashboard');});
    Route::get('/quartos', [QuartoController::class, 'index'])->name('quartos.index');
    Route::post('/reservar/{quarto}', [ReservaController::class, 'store'])->name('reservas.store');
    Route::delete('/reservas/{id}', [ReservaController::class, 'destroy'])->name('reservas.destroy');
});

// Route::get('/email-teste', function () {
//     Mail::raw('Teste de email', function ($message) {
//         $message->to('paulovictor2006@live.com')->subject('Teste de E-mail');     
//     });
//     return 'E-mail enviado com sucesso!';
// });
