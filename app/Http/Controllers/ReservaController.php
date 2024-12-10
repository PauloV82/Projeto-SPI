<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Quarto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservaConfirmada;


class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::where('user_id', Auth::id())->with('quarto')->get();
        return view('reservas', compact('reservas'));
    }

    public function store(Request $request, $quartoId)
    {
        $quarto = Quarto::findOrFail($quartoId); 

        
        $reserva = Reserva::create([
            'user_id' => Auth::id(),
            'quarto_id' => $quartoId,
            'data_hora_reserva' => now(),
        ]);

        Mail::to(Auth::user()->email)->send(new ReservaConfirmada($reserva));

        return redirect()->route('reservas')->with('success', 'Reserva realizada com sucesso!');
    }   



    public function destroy($id)
    {
        $reserva = Reserva::where('user_id', Auth::id())->findOrFail($id);
        $reserva->delete();

        return redirect()->route('reservas');
    }
}
