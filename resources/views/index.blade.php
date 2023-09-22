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
                <div class="about-2 column large-full">

                    <p class="lead">
                        Nulla aspernatur nam et accusantium. Tempore delectus dignissimos aut
                        ab commodi. Labore et cupiditate temporibus odio debitis eaque.
                        Officia provident aut iste et dicta perferendis. Velit iure adipisci.
                    </p>

                </div>

                <div class="about-image">
                    <img src="{{asset('images/bruna.jpeg')}}" class="img-fluid" alt="">
                </div>

            </div>

        </div>

    </section> <!-- end about -->


    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading section-heading--centerbottom">Selected Works</h2>
                <p class="section-desc">
                    Here are some of my selected works I have done lately. Feel free to
                    check them out.
                </p>
            </div>
        </div>

        <div class="masonry-wrap">

            <div class="masonry">
                <div class="grid-sizer"></div>

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-city-building.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                <img src="images/portfolio/city-building.jpg"
                                     srcset="images/portfolio/city-building.jpg 1x, images/portfolio/city-building@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>

                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                City Building
                            </h4>
                            <p class="item-folio__cat">
                                Branding
                            </p>
                        </div>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div>

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                <img src="images/portfolio/woodcraft.jpg"
                                     srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Woodcraft
                            </h4>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div>

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                <img src="images/portfolio/the-beetle.jpg"
                                     srcset="images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                The Beetle
                            </h4>
                            <p class="item-folio__cat">
                                Web Development
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div>

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                <img src="images/portfolio/shutterbug.jpg"
                                     srcset="images/portfolio/shutterbug.jpg 1x, images/portfolio/shutterbug@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Shutterbug
                            </h4>
                            <p class="item-folio__cat">
                                Branding
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div>

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-lamp.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                <img src="images/portfolio/lamp.jpg"
                                     srcset="images/portfolio/lamp.jpg 1x, images/portfolio/lamp@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Lamp
                            </h4>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div>

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-fuji.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                <img src="images/portfolio/fuji.jpg"
                                     srcset="images/portfolio/fuji.jpg 1x, images/portfolio/fuji@2x.jpg 2x" alt="">
                            </a>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link" target="_blank"></a>
                        </div>
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                Fuji
                            </h4>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section> <!-- end s-work -->

@endsection
