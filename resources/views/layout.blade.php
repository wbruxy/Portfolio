<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Bruna Silva</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- favicons
    ================================================== -->
    <link href="{{asset('images/code-solid.ico')}}" rel="icon">

    <!-- icon Font
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- libraries Stylesheet
    ================================================== -->
    <link rel="stylesheet" href="{{asset('lib/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}">

    <!-- bootstrap
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >

</head>
<body>


    @yield('content')

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top ftco-navbar-light" id="navbar">
        <div class="container">
            <a class="navbar-brand align-items-center" href="{{route('index')}}">BS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projetos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; 2023. <a>Bruna Silva</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="https://github.com/wbruxy">github</a>
                            <a href="">linkedin</a>
                            <a href="https://www.instagram.com/wbruxy/">instagram</a>
                            <a href="">email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>
</html>

