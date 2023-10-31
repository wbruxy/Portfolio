@extends('layout')

@section('content')


    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Navbar Start -->

    <!-- Navbar End -->


    <div orientation="left" class="social-media d-none d-md-block">
        <ul>
            <li>
                <a href="" aria-label="Linkedin" target="_blank" rel="noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                    <title>LinkedIn</title>
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>
            </li>
            <li>
                <a href="" aria-label="GitHub" target="_blank" rel="noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                    <title>GitHub</title>
                    <path
                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                    </path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="" aria-label="Instagram" target="_blank" rel="noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                    <title>Instagram</title>
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
            </li>
            <li>
                <a href="" aria-label="Email" target="_blank" rel="noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-email">
                    <title>Email</title>
                    <path
                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                    </path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>

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
                    <h1 class="mb-4 text-white">Aprecie os meus projetos!</h1>
                </div>

                <div class="row g-4">

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/projects/eazy.png')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <h5 class="lh-base text-white mb-3">EAZY</h5>
                                <small>Machine learning</small>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/projects/gv2.png')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <h5 class="lh-base text-white mb-3">GV2 ACADEMIA</h5>
                                <small>Predictive Analysis</small>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/projects/tomjazz.png')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <h5 class="lh-base text-white mb-3">Em construção...</h5>
                                <small>Predictive Analysis</small>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/projects/ebrapiagroinsumos.png')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <h5 class="lh-base text-white mb-3">Ebrapi Agroinsumos</h5>
                                <small>HTML</small>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/projects/andamento.png')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <h5 class="lh-base text-white mb-3">Em construção...</h5>
                                <small>Predictive Analysis</small>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="project-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{asset('images/projects/andamento.png')}}" alt="">
                            <a class="project-overlay text-decoration-none" href="">
                                <h5 class="lh-base text-white mb-3">Em construção...</h5>
                                <small>Predictive Analysis</small>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- project End -->

@endsection
