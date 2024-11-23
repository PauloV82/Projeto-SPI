<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
</head>
<body>
    
    @yield('footer')
    <footer>
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
</body>
</html>