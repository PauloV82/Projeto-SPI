<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['user_id', 'quarto_id', 'data_hora_reserva'];

    public function quarto()
    {
        return $this->belongsTo(Quarto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
