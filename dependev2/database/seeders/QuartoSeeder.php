<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quarto;

class QuartoSeeder extends Seeder
{
    public function run()
    {
        Quarto::create([
            'nome' => 'Quarto Luxo',
            'descricao' => 'Um quarto espaçoso com vista para o mar.',
            'preco' => 350.00,
            'imagem' => '/luxo.jpg'
        ]);

        Quarto::create([
            'nome' => 'Quarto Standard',
            'descricao' => 'Conforto e praticidade em um só lugar.',
            'preco' => 100.00,
            'imagem' => '/standard.jpg'
        ]);
    }
}   
