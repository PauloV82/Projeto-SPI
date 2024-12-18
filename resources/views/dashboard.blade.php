@extends('layouts.dash')

@section('title', 'Home')
    
@section('content')
<div class="container contt">
        
    
        <!-- Textos -->
        <div id="descricao" class="row justify-content-center">
            <div class="title-container col-12 pt-5 text-white">
                <h2 class="text-center">VIVA A BELEZA DA TRANQUILIDADE</h2>
                <div class="progress mx-5 px-5 mt-4" style="height: 2px; background-color: #16212e;">
                    <div class="barr mx-5"></div>
                </div>
                </div>
            <div class="col-12 fs-4 mt-4 px-4 text-white texto">
                <p class="px-5 mt-4">Descubra o verdadeiro significado de tranquilidade no Elysian Waves, um refúgio inspirado pela serenidade das ilhas gregas. Situado em uma localização deslumbrante, nosso hotel oferece uma experiência única de relaxamento e beleza. Mergulhe nas águas cristalinas do mar Egeu e sinta a suave brisa do mediterrâneo enquanto o sol brilha no horizonte.</p>
                <p class="px-5">Nossos quartos, elegantemente decorados, são um convite ao descanso absoluto. Cada detalhe é pensado para proporcionar conforto e uma conexão genuína com a natureza ao redor. Desfrute de uma estadia imersiva onde o tempo parece desacelerar e a paz é a única constante.</p>
                <p class="px-5">Aproveite as maravilhas da culinária local em nosso restaurante, que oferece pratos frescos e deliciosos preparados com ingredientes da mais alta qualidade. Nossos espaços ao ar livre, com vistas de tirar o fôlego, são perfeitos para relaxar e absorver a beleza natural do entorno.</p>
                <p class="px-5">No Elysian Waves, cada momento é uma celebração da arte de viver bem. Deixe-se levar pela magia do sol, do mar e da cultura grega, e permita que sua experiência conosco seja um verdadeiro descanso para o corpo e a alma.</p>
            </div>
        </div>

        <div class="progress mx-5 px-5 mt-4" style="height: 2px; background-color: #192534;">
            <div class="barr mx-5"></div>
        </div>
        <div class="row justify-content-center"> 
            <div class="col-12 mt-4 px-4 galery">
                <img style="width: 100%; height: auto;" class="px-5" src="/img/image1.png" alt="">
            </div>
            <div class="row">
                <div class="col-12 col-md-5 mt-4">
                    <img style="width: 100%; height: auto;" class="ps-5" src="/img/image2.png" alt="">
                </div>
                <div class="col-12 col-md-7 mt-4">
                    <img style="width: 100%; height: auto;" class="pe-5" src="/img/image4.png" alt="">
                    <img style="width: 100%; height: auto;" class="pe-5 mt-2" src="/img/image3.png" alt="">
                </div>
            </div>
        </div>

        @endsection