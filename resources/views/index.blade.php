@extends('layout')

@section('content')

    <!-- home
    ================================================== -->
    <section id="home" class="home overlay target-section">

        <div class="row home-content">

            <div class="column large-9 mob-full home-text">

                <h1>Bruna Silva</h1>
                <h3>Front-End Developer</h3>
            </div>

        </div>

    </section> <!-- end home -->


    <!-- about
    ================================================== -->
    <section id="about" class="about target-section">

        <div class="about-me">

            <div class="row heading-block" data-aos="fade-up">
                <div class="column large-full">
                    <h2 class="section-heading">Sobre mim</h2>
                </div>
            </div>

            <div class="row about-me__content" data-aos="fade-up">
                <div class="column large-full about-me__text">
                    <p class="lead">
                    Nulla aspernatur nam et accusantium. Tempore delectus dignissimos aut
                    ab commodi. Labore et cupiditate temporibus odio debitis eaque.
                    Officia provident aut iste et dicta perferendis. Velit iure adipisci.
                    Molestiae qui fuga rerum facilis.
                    </p>

                    <p>
                    Reprehenderit quia id facilis nihil odit perferendis fugiat quidem voluptas.
                    Non ratione tenetur. Quis earum quia deleniti fugit fugiat minus omnis.
                    Iure dolore dolorum. Aspernatur quos cumque ea dolorum nemo nihil
                    beatae magnam. Qui molestiae rem. Maxime enim provident ipsum reprehenderit tenetur. Et cupiditate
                    repellendus. Et modi ipsum aut harum. Ratione alias.
                    </p>

                    <p>
                    Rerum consequatur dolore quae.
                    Qui excepturi facilis quam quae quasi. Mollitia occaecati minus voluptas veniam.
                    Qui excepturi facilis quam quae quasi. Mollitia occaecati minus voluptas veniam. Est est occaecati dolor
                    qui aut et eum. Aspernatur quos cumque ea dolorum nemo nihil
                    beatae magnam. Qui molestiae rem.
                    </p>

                    <p>
                    Maxime enim provident ipsum reprehenderit tenetur. Et cupiditate
                    repellendus. Et modi ipsum aut harum. Ratione alias sed. Rerum
                    consequatur dolore quae. Qui excepturi facilis quam quae quasi.
                    Mollitia occaecati minus voluptas veniam. Est est occaecati dolor
                    qui aut et eum. Aspernatur quos cumque ea dolorum nemo nihil
                    beatae magnam. Qui molestiae rem. Aspernatur quos cumque ea dolorum
                    nemo nihil. Qui molestiae rem.
                    </p>
                </div>
            </div>

        </div>

    </div> <!-- end about-me -->


    <!-- projects
    ================================================== -->
    <section id="projects" class="projects ss-dark target-section">
        <div class="container">

            <div class="shadow-overlay"></div>

            <div class="row heading-block" data-aos="fade-up">
                <div class="column large-full">
                    <h2 class="section-heading">Projetos</h2>
                </div>
            </div>

            <div class="row project-container">

                <div class="col-lg-4 col-md-6 project-item">
                    <div class="project-wrap">
                        <img src="{{asset('images/projects/portfolio-1.jpg')}}" class="img-fluid" alt="">
                        <div class="project-info">
                            <h4>Projeto</h4>
                            <p>Web</p>
                            <div class="project-links">
                                <a href="" data-gallery="projectGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="" title="Mais Detalhes"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>




    <!--<section id="projects" class="projects ss-dark target-section">

        <div class="shadow-overlay"></div>

        <div class="row heading-block" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading">Projetos</h2>
            </div>
        </div>

        <div class="row projects-list block-large-1-3 block-medium-1-2 block-tab-full">

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Brand Identity</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Illustration</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Web Design</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Product Strategy</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">UI/UX Design</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Mobile Design</h4>
                    <p>
                    Sit ut cum molestiae. Dolore ducimus qui quasi. Fugiat consequatur sit vel illum vel et
                    a delectus. Vel sequi vitae voluptatem perspiciatis eligendi. Voluptatibus optio natus
                    asperiores est commodi amet quia architecto. Dolores necessitatibus et.
                    </p>
                </div>
            </div>

        </div>

    </section> <!-- end projects -->

@endsection
