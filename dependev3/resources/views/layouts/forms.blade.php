<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style-forms.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ca5dba5f80.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <title>@yield('title')</title>
</head>
<body class="body">
    <div class="container contt">
        
        

        <div class="row justify-content-center">
            <div class="col-12 bgHome">
                <nav class="navbar navbar-expand-lg navbar-dark fs-4 mt-2">
                    <div class="container-fluid">
                      <a class="navbar-brand fs-3" href="/">home</a>
                      <button class="resv navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse d-flex flex-lg-row-reverse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="/quartos">quartos</a>
                            <a class="nav-link active" aria-current="page" href="#contatos">contatos</a>
                            <a class="nav-link active" aria-current="page" href="#descricao">sobre nós</a>
                            
                            <button class="login-bt">
                                <a href="{{ route('login') }}">entrar</a>
                            </button>
                        </div>
                      </div>
                    </div>
                  </nav>
                  <div class="back-log">
                    @yield('content')
                  </div>
                
            </div>
        </div>

        

        <footer id="contatos">
            <div class="progress mx-5 px-5 my-4" style="height: 2px; background-color: #192534;">
                <div class="barr mx-5"></div>
            </div>
            <div class="row justify-content-center">
                <footer class="col-12 fs-3 text-center mt-2 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-auto mx-3"><i class="fa-solid fa-phone"></i> (84)97982-1548</div>
                        <div class="col-auto mx-3"><i class="fa-brands fa-instagram"></i> @elysian_waves</div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-auto">
                            <p><i class="fa-solid fa-envelope"></i> elysianwaves@hoteis.com</p>
                        </div>
                    </div>
                </footer>
            </div>
        </footer>
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>