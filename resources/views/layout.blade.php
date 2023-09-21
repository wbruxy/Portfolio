<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <title>Bruna Silva</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>
<body>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    @yield('content')

    <!-- site header
    ================================================== -->
    <header class="header">

        <div class="header-logo">
            <a href="{{route('index')}}" alt="Homepage">&lsaquo;BS&rsaquo;</a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-main-nav">
                <li class="current"><a class="smoothscroll" href="#home" title="Menu">Menu</a></li>
                <li><a class="smoothscroll" href="#about" title="Sobre">Sobre</a></li>
                <li><a class="smoothscroll" href="#projects" title="Projetos">Projetos</a></li>
                <li><a class="smoothscroll" href="#contact" title="Contato">Contato</a></li>
            </ul>

            <ul class="header-social">
                <li><a href="#0"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#0"><i class="fab fa-github" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>

    </header>

    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact ss-dark target-section">

        <div class="row heading-block" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading">Get In Touch</h2>
            </div>
        </div>

        <div class="row contact-main" data-aos="fade-up">
            <div class="column large-full">
                <p class="contact-email">
                    <a href="mailto:#0">hello@epitome.com</a>
                </p>

                <p class="section-desc">
                I'm happy to connect, listen and help. Let's work together and build
                something awesome. Let's turn your idea to an even greater product.
                <a href="mailto:#0">Email Me</a>.
                </p>
            </div>
        </div>

        <div class="row contact-infos" data-aos="fade-up" data-aos-anchor=".contact-main">

            <div class="column large-5 medium-full contact-phone">
                <h4>Call Me</h4>
                <a href="tel:197-543-2345">+197 543 2345</a>
            </div>

            <div class="column large-7 medium-full contact-social">
                <h4>Social</h4>
                <ul>
                    <li><a href="#0" title="Facebook">Facebook</a></li>
                    <li><a href="#0" title="Twitter">Twitter</a></li>
                    <li><a href="#0" title="Instagram">Instagram</a></li>
                </ul>
            </div>

        </div> <!-- end contact-infos -->

    </section> <!-- end s-contact -->

    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="column large-full ss-copyright">
                <span>© Copyright Epitome 2019</span>
                <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"></a>
            </div>
        </div>
    </footer>


    <!-- js
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
