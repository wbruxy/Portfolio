@extends('layout')

@section('content')


    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
                    <h1>BS</h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="project.html" class="nav-item nav-link">Projects</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="faq.html" class="dropdown-item">FAQs</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- home Start -->
    <section id="home" class="home overlay">
        <div class="container-fluid pt-5 mb-5">
            <div class="container pt-5">
                <div class="row g-5 pt-5">
                    <div class="col-lg-6 align-self-center home-text text-lg-start mb-lg-5">
                        <h1 class="display-4 text-white animated slideInRight">Bruna Silva</h1>
                        <p class="home-disc text-white animated slideInRight">Front-End Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home End -->


    <!-- about -->
    <div class="container-fluid bg-dark py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-primary subtitle mb-3"><span>Sobre mim</span></div>
                    <h1 class="mb-4 text-white">Lorem ipsum dolor sit amet</h1>
                    <p class="mb-4" style="font-size: 1.3rem">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet
                    </p>
                    <p class="mb-4" style="font-size: 1.3rem;">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                        labore lorem sit. Sanctus clita duo justo et tempor.
                        Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                        labore lorem sit. Sanctus clita duo justo et tempor.
                    </p>

                </div>

                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="text-center pt-0">
                            <img class="img-fluid" src="{{asset('images/bruna.png')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about end -->


    <!-- project Start -->
    <section id="projects">

        <div class="container-fluid project py-5">

            <div class="container py-5">
                <div class="col-lg-6 project-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-primary subtitle mb-3"><span>Projetos</span></div>
                    <h1 class="mb-4 text-white">We Make Your Business Smarter with Artificial Intelligence</h1>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/project-1.jpg')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <small>Robotic Automation</small>
                                <h5 class="lh-base text-white mb-3">Ebrapi Agroinsumos</h5>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/project-2.jpg')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <small>Machine learning</small>
                                <h5 class="lh-base text-white mb-3">EAZY</h5>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/project-3.jpg')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <small>Predictive Analysis</small>
                                <h5 class="lh-base text-white mb-3">GV2 ACADEMIA</h5>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/project-3.jpg')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <small>Predictive Analysis</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- project End -->

@endsection
