<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Quartos - Elysian Waves</title>
</head>
<body>
    <div class="container contt">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center text-white mt-5">Bem-vindo à página de quartos</h1>
                <p class="text-white text-center fs-5">Você está autenticado.</p>
                <div class="row justify-content-center mt-5">
                    <div class="col-12 text-center">
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <h2 class="title-container">Nossos Quartos</h2>
                <div class="progress mx-5 px-5 mt-4" style="height: 2px; background-color: #16212e;">
                    <div class="barr mx-5"></div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <!-- Exemplo de Quarto -->
            <div class="col-md-4 mb-4">
                <div class="card" style="background-color: #2a353f;">
                    <img src="/img/luxo.jpg" class="card-img-top" alt="Quarto 1">
                    <div class="card-body text-white">
                        <strong><h5 class="card-title">Quarto Luxo</h5></strong>
                        <p class="card-text">Um quarto espaçoso com vista para o mar.</p>
                        <a href="#" class="btn resv" style="color: antiquewhite">Reservar</a>
                    </div>
                </div>
            </div>
            <!-- Adicione mais quartos conforme necessário -->
            <div class="col-md-4 mb-4">
                <div class="card" style="background-color: #2a353f;">
                    <img src="/img/standard.jpg" class="card-img-top" alt="Quarto 2">
                    <div class="card-body text-white">
                        <strong><h5 class="card-title">Quarto Standard</h5></strong>
                        <p class="card-text">Conforto e praticidade em um só lugar.</p>
                        <a href="#" class="btn resv" style="color: antiquewhite">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>

<?php /**PATH C:\Users\user\Documents\depende\resources\views/quartos.blade.php ENDPATH**/ ?>