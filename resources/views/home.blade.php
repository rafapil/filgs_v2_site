<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="pt-br"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Glint</title>
    <meta name="description" content="">
    <meta name="author" content="Rafael Filgueiras - Filgs Consultoria tecnologica e Agencia Digital">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{@asset('css/base.css')}}">
    <link rel="stylesheet" href="{{@asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{@asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{@asset('js/modernizr.js')}}"></script>
    <script src="{{@asset('js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{@asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{@asset('favicon.ico')}}" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="/">
                <img src="{{@asset('images/logo.png')}}" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">Sobre</a></li>
                    <li><a class="smoothscroll" href="#services" title="services">Serviços</a></li>
                    <li><a class="smoothscroll" href="#works" title="works">Projetos</a></li>
                    <li><a class="smoothscroll" href="#clients" title="clients">Soluções</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contato</a></li>

                <hr>

                    <li><a class="smoothscroll" href="#" title="about">Login</a></li>
                    <!-- <li><a class="smoothscroll" href="#" title="about">Login</a></li>
                    <li><a class="smoothscroll" href="#" title="about">Login</a></li> -->
                </ul>

                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>

                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-github"></i></a>
                    </li>
                    <!--<li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li> -->
                </ul>

            </div>
            <!-- end header-nav__content -->

        </nav>
        <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header>
    <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="{{@asset('images/hero-bg.png')}}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Bem-vindo ao Filgs</h3>

                <h1>
                    Somos uma consultoria
                    <br>tecnológica e agência digital
                    <br> focada na experiência do usuário
                    <br> e serviços de mobilidade digital.
                </h1>

                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Contato
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        Sobre nós
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Rolar para baixo</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div>
        <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-github" aria-hidden="true"></i><span>Github</span></a>
            </li>
            <!-- <li>
                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li> -->
        </ul>
        <!-- end home-social -->

    </section>
    <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <!-- <h3 class="subhead subhead--dark">Hello There</h3> -->
                <h1 class="display-1 display-1--light">Somos Filgs</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                    Toda a ideia por trás do “Filgs”, teve início com o nosso CEO Rafael, que iniciou a carreira como analista de aplicações e em 2017  iniciou uma estratégia para monitorar as experiências dos usuários, mostrando excelentes resultados, no ano seguinte alguns amigos de diferentes áreas (tecnologia, administração, designer e marketing), se juntaram ao time e dessa forma iniciaram uma nova etapa que foi o desenvolvimento de soluções digitais e mobile, pensadas na experiência do usuário para maximizar resultados.

                    Atualmente todas as nossas soluções são baseadas em serviços,
                    <br>“pay per use” pois acreditamos que os nossos clientes não precisam se preocupar com sustentações de um projeto e sim colher os frutos do mesmo.

                    <br>E esperamos que você nos deixe fazer parte da sua história e do seu sucesso.

                </p>
            </div>
        </div>
        <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">

            <div class="col-block stats__col ">
                <div class="stats__count">2</div>
                <h5>Prêmios Recebidos</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">223</div>
                <h5>Projetos</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">181</div>
                <h5>Projetos Completos</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">22</div>
                <h5>Clientes Felizes</h5>
            </div>

        </div>
        <!-- end about-stats -->

        <div class="about__line"></div>

    </section>
    <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">O QUE FAZEMOS</h3>
                <h1 class="display-2">Nós temos tudo que você precisa para lançar e fazer crescer o seu negócio</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Brand Identity</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Illustration</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-mobile"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Marketing</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-earth"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Web Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Packaging Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">Web Development</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

        </div>
        <!-- end services-list -->

    </section>
    <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">

            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Trabalhos recentes</h3>
                    <h1 class="display-2 display-2--light">Adoramos o que fazemos,<br>confira alguns de nossos trabalhos mais recentes</h1>
                </div>
            </div>
            <!-- end section-header -->

        </div>
        <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{@asset('images/portfolio/gallery/g-shutterbug.jpg')}}" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="{{@asset('images/portfolio/lady-shutterbug.jpg')}}" srcset="{{@asset('images/portfolio/lady-shutterbug.jpg 1x, images/portfolio/lady-shutterbug@2x.jpg 2x')}}" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>
                    <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{@asset('images/portfolio/gallery/g-woodcraft.jpg')}}" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                    <img src="{{@asset('images/portfolio/woodcraft.jpg')}}" srcset="{{@asset('images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x')}}" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Woodcraft
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>
                    <!-- end masonry__brick -->
                    <!--
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{@asset('images/portfolio/gallery/g-beetle.jpg')}}" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="{{@asset('images/portfolio/the-beetle.jpg')}}" srcset="{{@asset('images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x')}}" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    The Beetle
                                </h3>
                                <p class="item-folio__cat">
                                    Web Development
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div> -->
                    <!-- end masonry__brick -->
                    <!--
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{@asset('images/portfolio/gallery/g-grow-green.jpg')}}" class="thumb-link" title="Grow Green" data-size="1050x700">
                                    <img src="{{@asset('images/portfolio/grow-green.jpg')}}" srcset="{{@asset('images/portfolio/grow-green.jpg 1x, images/portfolio/grow-green@2x.jpg 2x')}}" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Grow Green
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>
                    -->
                    <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{@asset('images/portfolio/gallery/g-guitarist.jpg')}}" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="{{@asset('images/portfolio/guitarist.jpg')}}" srcset="{{@asset('images/portfolio/guitarist.jpg 1x, images/portfolio/guitarist@2x.jpg 2x')}}" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Guitarist
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>
                    <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="{{@asset('images/portfolio/gallery/g-palmeira.jpg')}}" class="thumb-link" title="Palmeira" data-size="1050x700">
                                    <img src="{{@asset('images/portfolio/palmeira.jpg')}}" srcset="{{@asset('images/portfolio/palmeira.jpg 1x, images/portfolio/palmeira@2x.jpg 2x')}}" alt="">
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Palmeira
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>

                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>

                        </div>
                    </div>
                    <!-- end masonry__brick -->

                </div>
                <!-- end masonry -->
            </div>
            <!-- end col-full -->
        </div>
        <!-- end works-content -->

    </section>
    <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Tecnologias que usamos</h3>
                <h1 class="display-2">Soluções que utilizamos em projetos com nossos clientes e parceiros.</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">

                    <a href="#0" title="" class="clients__slide"><img src="{{@asset('images/clients/apple.png')}}" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="{{@asset('images/clients/atom.png')}}" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="{{@asset('images/clients/blackberry.png')}}" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="{{@asset('images/clients/magento.png')}}" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="{{@asset('images/clients/dropbox.png')}}" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="{{@asset('images/clients/envato.png')}}" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="{{@asset('images/clients/firefox.png')}}" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="{{@asset('images/clients/joomla.png')}}" /></a>


                </div>
                <!-- end clients -->
            </div>
            <!-- end col-full -->
        </div>
        <!-- end clients-outer -->

        <!--
        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>Qui ipsam temporibus quisquam vel. Maiores eos cumque distinctio nam accusantium ipsum. Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori. Excepturi nam cupiditate
                            culpa doloremque deleniti repellat.</p>

                        <img src="{{@asset('images/avatars/user-01.jpg')}}" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Tim Cook</span>
                            <span class="testimonials__pos">CEO, Apple</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">

                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci. Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>

                        <img src="{{@asset('images/avatars/user-05.jpg')}}" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Sundar Pichai</span>
                            <span class="testimonials__pos">CEO, Google</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">

                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam. Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>

                        <img src="{{@asset('images/avatars/user-02.jpg')}}" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Satya Nadella</span>
                            <span class="testimonials__pos">CEO, Microsoft</span>
                        </div>

                    </div>

                </div>
                end testimonials

            </div>
            end col-full
        </div> -->
        <!-- end client-testimonials -->

    </section>
    <!-- end s-clients -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contato</h3>
                <h1 class="display-2 display-2--light">Tire todas as suas dúvidas, estamos a disposição para ajudar, sempre.</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">

            <div class="contact-primary">

                <h3 class="h6">Envie-nos uma mensagem</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>

                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="Digite o seu nome" value="" minlength="2" required="" aria-required="true" class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="O seu Email aqui" value="" required="" aria-required="true" class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Coloque o Assunto" value="" class="full-width">
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" id="contactMessage" placeholder="Digite a sua mensagem aqui" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                        </div>
                        <div class="form-field">
                            <button class="full-width btn--primary">Enviar</button>
                            <div class="submit-loader">
                                <div class="text-loader">Enviando...</div>
                                <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Algo deu errado. Por favor, tente novamente.
                </div>

                <!-- contact-success -->
                <div class="message-success">
                    Sua mensagem foi enviada, obrigado!<br>
                </div>

            </div>
            <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Informações de contato</h3>

                    <div class="cinfo">
                        <h5>Onde nos encontrar</h5>
                        <p>
                            Google Startup Campus<br> São Paulo, SP<br>
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email</h5>
                        <p>
                            contato@filgs.com<br>
                        </p>
                    </div>

                    <!-- Incluir Skype e WhatsApp, obter um chip depois
                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: (+63) 555 1212<br> Mobile: (+63) 555 0100<br> Fax: (+63) 555 0101
                        </p>
                    </div>
                    -->

                    <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>

                    </ul>
                    <!-- end contact-social -->

                </div>
                <!-- end contact-info -->
            </div>
            <!-- end contact-secondary -->

        </div>
        <!-- end contact-content -->

    </section>
    <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                Obrigado por acessar o nosso portal institucional, ficamos extremamente
                felizes, e mais uma vez nós colocamos a
                disposição para tirar dúvidas e auxiliar em seus projetos pessoais.
            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Receba nossas noticias</h4>
                <p>Gostaria de receber notícias e novidades diretamente no seu e-mail.
                    <br>Basta informar aqui e sempre será avisado quando houver novidades.
                </p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Informe o seu email" required="">
                        <input type="submit" name="subscribe" value="Inscrever-se">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div>
        <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>Politica de privacidade</span>
                    <span>© Copyright Filgs 2020</span>
                    <!-- <span>Site Template by <a href="https://www.colorlib.com/">Colorlib</a></span> -->
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
        <!-- end footer-bottom -->

    </footer>
    <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div>
    <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{@asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{@asset('js/plugins.js')}}"></script>
    <script src="{{@asset('js/main.js')}}"></script>

</body>

</html>