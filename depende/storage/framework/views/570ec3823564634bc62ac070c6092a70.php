<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca5dba5f80.js" crossorigin="anonymous"></script>
    <title><?php echo $__env->yieldContent('title', 'HOTEL'); ?></title>
</head>
<body>
    <!-- Cabeçalho -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark fs-4 mt-2">
            <div class="container-fluid">
                <a class="navbar-brand fs-3" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="#">quartos</a>
                        <a class="nav-link active" href="#">contatos</a>
                        <a class="nav-link active" href="#">sobre nós</a>
                        <a class="nav-link active" href="#">reservas</a>
                        <button class="profile">
                            <i class="fa-solid fa-user"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Conteúdo específico -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Rodapé -->
    <?php echo $__env->yieldContent('footer'); ?>
    <footer>
        <div class="progress mx-5 px-5 my-4" style="height: 2px; background-color: #192534;">
            <div class="barr mx-5"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto mx-3"><i class="fa-solid fa-phone"></i> (84)97982-1548</div>
            <div class="col-auto mx-3"><i class="fa-brands fa-instagram"></i> @elysian_waves</div>
            <div class="col-auto">
                <p><i class="fa-solid fa-envelope"></i> elysianwaves@hoteis.com</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\user\Documents\depende\resources\views/layouts/main.blade.php ENDPATH**/ ?>