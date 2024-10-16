<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ca5dba5f80.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>HOTEL</title>
</head>
<body>
    <div class="container contt">
        <!-- Menu -->
        <div class="row justify-content-center">
            <div class="col-12 bgHome">
                <nav class="navbar navbar-expand-lg navbar-dark fs-4 mt-2">
                    <div class="container-fluid">
                      <a class="navbar-brand fs-3" href="#">Home</a>
                      <button class="resv navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse d-flex flex-lg-row-reverse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <a class="nav-link active" aria-current="page" href="#">quartos</a>
                          <a class="nav-link active" aria-current="page" href="#">contatos</a>
                          <a class="nav-link active" aria-current="page" href="#">sobre nós</a>
                          <button class="resv">
                          <a class="nav-link active" aria-current="page" href="#">reservas</a>
                        </button>
                        <button class="profile">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        </div>
                      </div>
                    </div>
                  </nav>
                <h1>Elysian Waves</h1>
            </div>
        </div>
        <!-- Textos -->
        <div class="row justify-content-center">
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

        <!-- Galeria -->
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

        <!-- Rodapé -->
        <?php echo $__env->yieldContent('footer'); ?>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\savio\Documents\IFRN\Dependencia\Hotel\resources\views/welcome.blade.php ENDPATH**/ ?>