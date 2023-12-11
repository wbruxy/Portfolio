@extends('layout')

@section('content')


    <div id="preloader">
        <div id="loader"></div>
    </div>



    <!-- home Start -->
    <section id="home" class="home overlay">
        <div class="container-fluid pt-5 mb-5">
            <div class="container pt-5">
                <div class="row g-5 pt-5">
                    <div class="col-lg-6 align-self-center home-text text-lg-start mb-lg-5">
                        <h1 class="display-4 text-white animated slideInRight">Bruna Silva</h1>
                        <p class="home-disc animated slideInRight">Desenvolvedora Front-End</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home End -->


    <!-- about -->
    <div class="container-fluid bg-dark py-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-primary subtitle mb-3"><span>Sobre mim</span></div>
                    <h1 class="mb-4 text-white">Olá! Eu sou a Bruna Silva, Desenvolvedora Front-End.</h1>
                    <p class="mb-4" style="font-size: 1.3rem">Meu interesse pela tecnologia se despertou na minha infância, graças aos Videogames! Eventualmente me formei em Técnico de Informática, onde se deu início a minha experiência profissional como programadora, desenvolvendo sites em HTML, PHP e CSS.
                    </p>
                    <p class="mb-4" style="font-size: 1.3rem;">Após aprender o básico das linguagens de programaçãos eu pude aprimorar minhas habilidades e experiências com cursos e projetos. Ao longo do tempo, aprendi a utilizar o versionamento de códigos Git e consequentemente publicando meus projetos em sua plataforma GitHub.</p>
                    <p class="mb-4" style="font-size: 1.3rem;">Atualmente estou estudando JavaScript e TypeScript do básico ao avançado pela Udemy.</p>
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

                <div class="container-grid scroll-group--card scrolled-in wow fadeIn" id="card-project">
                    <div class="card scroll scrolled-in">
                        <img src="{{asset('images/projects/eazy.png')}}" alt="Sisys" class="card-image">
                        <div class="card-content">
                            <div class="card-content--title">
                                <h4 class="card-title">EAZY</h4>
                                <div class="app-icon">
                                    <a href="https://wbruxy.github.io/EAZY/" alt="Abrir" target="_blank" rel="noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="app-icon--open">
                                        <path class="path" d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline class="path" points="15 3 21 3 21 9"></polyline>
                                        <line class="path" x1="10" y1="14" x2="21" y2="3"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <p class="card-text mt-3">Site institucional do meu Trabalho de Conclusão de Curso.</p>
                            <p class="card-subtitle">HTML · CSS · JavaScript</p>
                        </div>
                    </div>

                    <div class="card scroll scrolled-in">
                        <img src="{{asset('images/projects/gv2.png')}}" alt="Sisys" class="card-image">
                        <div class="card-content">
                            <div class="card-content--title">
                                <h4 class="card-title">GV2 Academia</h4>
                                <div class="app-icon">
                                    <a href="https://wbruxy.github.io/GV2/" alt="Abrir" target="_blank" rel="noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="app-icon--open">
                                        <path class="path" d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline class="path" points="15 3 21 3 21 9"></polyline>
                                        <line class="path" x1="10" y1="14" x2="21" y2="3"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <p class="card-text mt-3">Site institucional de uma academia real, desenvolvido para o Trabalho de Conclusão de Curso.</p>
                            <p class="card-subtitle">HTML · CSS · JavaScript</p>
                        </div>
                    </div>

                    <div class="card scroll scrolled-in">
                        <img src="{{asset('images/projects/tomjazz.png')}}" alt="Sisys" class="card-image">
                        <div class="card-content">
                            <div class="card-content--title">
                                <h4 class="card-title">Tom's Jazz School</h4>
                                <div class="app-icon">
                                    <a href="https://wbruxy.github.io/Toms-Jazz-School/" alt="Abrir" target="_blank" rel="noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="app-icon--open">
                                        <path class="path" d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline class="path" points="15 3 21 3 21 9"></polyline>
                                        <line class="path" x1="10" y1="14" x2="21" y2="3"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <p class="card-text mt-3">Landing Page apenas com HTML e CSS a partir do Figma | OneBitCode.</p>
                            <p class="card-subtitle">HTML · CSS</p>
                        </div>
                    </div>

                    <div class="card scroll scrolled-in">
                        <img src="{{asset('images/projects/ebrapiagroinsumos.png')}}" alt="Sisys" class="card-image">
                        <div class="card-content">
                            <div class="card-content--title">
                                <h4 class="card-title">Ebrapi Agroinsumos</h4>
                                <div class="app-icon">
                                    <a href="https://www.agroinsumos.com.br/" alt="Abrir" target="_blank" rel="noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="app-icon--open">
                                        <path class="path" d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline class="path" points="15 3 21 3 21 9"></polyline>
                                        <line class="path" x1="10" y1="14" x2="21" y2="3"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <p class="card-text mt-3">Desenvolvimento de um site completo com painel administrativo integrado para uma empresa de vendas de agronegócio.</p>
                            <p class="card-subtitle">Laravel · CSS · SCSS · JavaScript</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- project End -->


    <!-- Newsletter Start -->
    <div id="contact" class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-primary subtitle mb-3"><span>Fale comigo!</span></div>
                    <h1 class="text-white mb-4">Let's subscribe the newsletter</h1>
                    <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


@endsection
