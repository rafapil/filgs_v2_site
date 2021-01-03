<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Filgs</title>
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
                <h3>Navegação</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="#" href="/blog" title="blog" target="_blank">Blog</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">Quem é o filgs</a></li>
                    <li><a class="smoothscroll" href="#services" title="services">Habilidades</a></li>
                    <!-- <li><a class="smoothscroll" href="#works" title="works">Projetos</a></li> -->
                    <!-- {{-- <li><a class="smoothscroll" href="#clients" title="clients">Soluções</a></li> --}} -->
                    <li><a class="smoothscroll" href="#contact" title="contact">Contato</a></li>

                    <hr>

                    <!-- <li><a class="smoothscroll" href="#" title="about">Login</a></li> -->
                    <!-- <li><a class="smoothscroll" href="#" title="about">Login</a></li>
                    <li><a class="smoothscroll" href="#" title="about">Login</a></li> -->
                </ul>

                <p>Filgs foi desenvolvido por: <a href='#0'>Rafael Filgueiras</a> e faz parte do seu portifolio pessoal
                    e agencia.</p>

                <ul class="header-nav__social">
                    {{-- <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li> --}}
                    {{-- <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li> --}}
                    {{-- <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li> --}}
                    <li>
                        <a href="https://github.com/agenciafilgs"><i class="fa fa-github"></i></a>
                    </li>

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
    <section id="home" class="s-home target-section" data-parallax="scroll"
        data-image-src="{{@asset('images/hero-bg.png')}}" data-natural-width=3000 data-natural-height=2000
        data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Oi eu sou o Filgs</h3>

                <h1>
                Desenvolvedor fullstack e mobile com habilidades em infraestrutura e monitoramento. 
Aqui é onde você vai conhecer um pouco sobre mim e se quiser também aprender um pouco com o meu Blog tem alguns artigos bem legais!

                </h1>

                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Contato
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        Quem é o Filgs
                    </a>
                    <a href="/blog" target="_blank" class="btn btn--stroke">
                        Nosso blog
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
            {{-- <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li> --}}
            {{-- <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li> --}}
            <li>
                <a href="https://github.com/agenciafilgs"><i class="fa fa-github"
                        aria-hidden="true"></i><span>Github</span></a>
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
                <h1 class="display-1 display-1--light">Quem é o Filgs</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                Meu nome é Rafael Filgueiras, sou um apaixonado por tecnologia desde criança, comecei como muitos fazendo manutenção curso em centros comunitários e depois de ganhar um Pentium 2 usado comecei a mexer com html e posteriormente um pouco de php e java. 
Alguns anos a frente passei a trabalhar com manutenção na Santa Ifigenia no centro de SP, lugar onde aprendi muito e junto com o conhecimento que já tinha nessa época montei alguns sites para as empresas que passei usando html/css + php com mysql. 
Caminhando mais um pouco tive oportunidade de atuar com servidores e datacenter em algumas empresas da cidade de Salvador – BA, onde obtive maior conhecimento sobre virtualização e configuração de ambientes web para IIS e Apache; além do conhecimento em SQLServer. Posteriormente no mesmo período abri uma micro empresa para realizar pequenos projetos. 
Algum tempo depois estava de volta a SP atuando como PJ em alguns projetos com Magento e OpenCart e neste mesmo período houve oportunidade de entrar em uma empresa multinacional na área de TI, onde tive meu primeiro contato com monitoramento. 
Por ter familiaridade com php e alguns bancos de dados, fazer adaptações, scripts e automações para o monitoramento facilitavam muito as probabilidades e o mais importante eu sabia e entendia como e o que era importante para a aplicação, isso foi o que me diferenciava. 
Após dois anos recebi uma proposta de uma outra grande empresa do ramo varejista para adentrar como “Analista de tools” posição que misturava consultor e desenvolvimento; nessa posição comecei a atuar com Cloud na nuvem Microsoft Azure, posteriormente GCP Google. 
Nesse período ganhei conhecimento com Aplicações PaaS, SaaS e IaaS; ficava responsável sobre o gerenciamento de custos de Cloud e das ferramentas usadas pela área de monitoração, consequentemente também atuava junto ao time de monitoramento desenvolvendo novas formas de monitorar os recursos usados, tanto que nesse período conseguimos capturar métricas diretas da nuvem publica e incorporar em nossas ferramentas, o que nós permitiu usar estes dados para começar a utilizar em conceitos avançados de obeservabilidade e melhorias nos processos de analise de sentimento. 
Por fim neste período realizei o desenvolvimento de aplicativo para os clientes finais conseguirem acompanhar todas as métricas de soluções adquiridas e também uma previsão de eventos obtidas graças os processos de observação. 
E atualmente agora em 2021 faço parte em um time focado em observabilidade e desenvolvimento com Flutter, no qual construí algumas aplicações com alto valor para o negócio. 
Sendo uma delas uma ferramenta para controle de plantões e gerência de chamados integrado ao Azure AD (com SAML) e o software Jira além de total integração com a ferramenta confluence para documentações e um chat aberto (publico) com o firebase tudo a partir do mesmo app e notificações com o oneSignal. 
<br>
Estas foram algumas das minhas conquistas ao longo da minha carreira.


                </p>
            </div>
        </div>
        <!-- end about-desc -->

        <div class="about__line"></div>

    </section>
    <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">HABILIDADES</h3>
                <h1 class="display-2">Estas são as minhas principais habilidades e conhecimentos</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Web Design</h3>
                    <p>Projetos criados com html/css, Javascript, habilidades com VueJS e sass. 
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-mobile"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Mobile</h3>
                    <p>Habilidades com Flutter e Android nativo com Java, consumo de APIs e integrações com soluções de mercado e monitoramento das aplicações com APMs. 
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-earth"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Cloud</h3>
                    <p>Conhecimento nas principais clouds Azure, GCP e Aws, habilidades com serveless, function PaaS, IaaS, container como serviço, Kubernets e gestão de custos.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Monitoramento e Observability</h3>
                    <p>Monitoramento de aplicação e negócio, desenvolvimento de integrações e customização da ferramenta Zabbix.<br> 
Gerenciamento de logs e APM com Elastisearch e Dynatrace.<br>
Relatórios integrados a processos de BI. 

                    </p>
                </div>
            </div>

        </div>
        <!-- end services-list -->

    </section>
    <!-- end s-services -->


    <!-- works
    ================================================== -->
    
    <!-- end s-works -->



    <!-- end s-clients -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contato</h3>
                <h1 class="display-2 display-2--light">Tire todas as suas dúvidas, estou a disposição para ajudar,
                    sempre.</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">

            <div class="contact-primary">

                <h3 class="h6">Envie-nos uma mensagem</h3>

                <div class="row">

                    <div class="col-full">
                        <p>
                            <div class="cinfo">
                                <h5>Email</h5>
                                <h3>
                                    <p>rafael.filgueiras@filgs.com.br</p>
                                </h3>
                            </div>

                            <div class="cinfo">
                                <h5>Número para contato</h5>
                                <span class="contact-number">+55 (11) 94538-0589</span>
                            </div>
                        </p>
                    </div> <!-- end contact-main -->

                </div>

            </div>
            <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Informações de contato</h3>

                    <div class="cinfo">
                        <h5>Onde nos encontrar</h5>
                        <p>
                            No momento home office<br> São Paulo, SP<br>
                        </p>
                    </div>

                    <ul class="contact-social">
                        {{-- <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li> --}}
                        <li>
                            <a href="https://github.com/agenciafilgs"><i class="fa fa-github"
                                    aria-hidden="true"></i></a>
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
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email"
                            placeholder="Informe o seu email" required="">
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
                    <span>© Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Todos os direitos reservados a Agencia Filgs</span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"
                            aria-hidden="true"></i></a>
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
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                        title="Close (Esc)"></button> <button class="pswp__button pswp__button--share"
                        title="Share"></button> <button class="pswp__button pswp__button--fs"
                        title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom"
                        title="Zoom in/out"></button>
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
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
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