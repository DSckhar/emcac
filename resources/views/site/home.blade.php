<!DOCTYPE html>
<html lang="en">
<head>
    <title>EMCAC</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('site/css/font-awesome.min.css')}}">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{asset('site/css/elegant-fonts.css')}}">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{asset('site/css/themify-icons.css')}}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('site/css/swiper.min.css')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
</head>
<body>
    <div class="hero-content">
        <header class="site-header">
            

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="{{asset('/')}}" rel="home">EM<span>CAC</span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item" disabled><a href="">Home</a></li>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{route('publicacoes')}}">Publicações</a></li>
                                    <li><a href="{{route('documento')}}">Documentos</a></li>
                                    <li><a href="/sobre">Sobre</a></li>
                                </ul>
                                

                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div><!-- .hamburger-menu -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header><!-- .site-header -->

        <div class="hero-content-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h2 style="color: #19c880;">Escola Municipal</h2>
                                <h1>Colônia Agrícola<br/>de Ceraíma</h1>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>Educar é crescer junto com o seu filho</p>
                            </div><!-- .entry-content -->
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .hero-content-hero-content-overlay -->
    </div><!-- .hero-content -->

    <div class="icon-boxes">
        <div class="container-fluid">
            <div class="flex flex-wrap align-items-stretch">
                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-user"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Conheça nossa equipe</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Nossa instituição é formada por uma equipe qualificada e dedicada em compartilhar o conhecimento.</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="{{route('funcionario')}}">Saiba mais</a>
                    </footer><!-- .entry-footer -->
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-blackboard"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Publicações</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="{{route('publicacoes')}}">Saiba mais</a>
                    </footer><!-- .entry-footer -->
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-files"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Documentos</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="{{route('documento')}}">Saiba mais</a>
                    </footer><!-- .entry-footer -->
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-calendar"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Agenda</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Veja o nosso calendario escolar</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="{{route('agenda')}}">Saiba mais</a>
                    </footer><!-- .entry-footer -->
                </div><!-- .icon-box -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .icon-boxes -->

    @if($publicacaoPrincipal != null)
        <section class="latest-news-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="heading flex justify-content-between align-items-center">
                            <h2 class="entry-title">Últimas Publicações</h2>
                        </header><!-- .heading -->
                    </div><!-- .col -->
                    <div class="col-12 col-lg-6">
                        <div class="featured-event-content">
                            <figure class="event-thumbnail position-relative m-0">
                                <a href="{{route('publicacao', $publicacaoPrincipal->id)}}">
                                    @if($publicacaoPrincipal->foto != '')
                                        <img src='{{asset("storage/media/fotos/{$publicacaoPrincipal->foto}")}}' width="550" alt="">
                                    @elseif($publicacaoPrincipal->foto == '')
                                        <img src='{{asset("site/images/semFoto.png")}}' width="550" alt="">
                                    @endif
                                </a>
                                <div class="posted-date position-absolute">
                                    <div class="day">{{date('d', strtotime($publicacaoPrincipal->dInicio))}}</div>
                                    <div class="month">{{date('m', strtotime($publicacaoPrincipal->dInicio))}}</div>
                                </div><!-- .posted-date -->
                            </figure><!-- .event-thumbnail -->

                            <header class="entry-header flex flex-wrap align-items-center">
                                <h2 class="entry-title"><a href="{{route('publicacao', $publicacaoPrincipal->id)}}">{{$publicacaoPrincipal->titulo}}</a></h2>

                                <!-- <div class="event-location"><i class="fa fa-map-marker"></i>40 Baria Sreet 133/2 NewYork City, US</div> -->

                                <div class="event-duration"><i class="fa fa-calendar"></i>{{date('d/m/Y', strtotime($publicacaoPrincipal->dInicio))}} - {{date('d/m/Y', strtotime($publicacaoPrincipal->dTermino))}}</div>
                            </header><!-- .entry-header -->
                        </div><!-- .featured-event-content -->
                    </div><!-- .col -->
                    
                    @if($publicacoesSecundarias != null)
                        <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                            @foreach($publicacoesSecundarias as $publicacoesSec)
                                <div class="event-content flex flex-wrap justify-content-between align-content-stretch">
                                    <figure class="event-thumbnail">
                                        <a href="{{route('publicacao', $publicacoesSec->id)}}">
                                            @if($publicacoesSec->foto != '')
                                                <img src='{{asset("storage/media/fotos/{$publicacoesSec->foto}")}}' width="200" alt="">
                                            @elseif($publicacoesSec->foto == '')
                                                <img src='{{asset("site/images/semFoto.png")}}' width="200" alt="">
                                            @endif    
                                        </a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="event-content-wrap">
                                        <header class="entry-header">
                                            <div class="posted-date">
                                                <i class="fa fa-calendar"></i>{{date('d/m/Y', strtotime($publicacoesSec->dInicio))}} - {{date('d/m/Y', strtotime($publicacoesSec->dTermino))}}
                                            </div><!-- .posted-date -->

                                            <h2 class="entry-title"><a href="{{route('publicacao', $publicacoesSec->id)}}">{{$publicacoesSec->titulo}}</a></h2>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p><?php echo substr($publicacoesSec->descricao, 0, 80) ?>...</p>
                                        </div><!-- .entry-content -->
                                    </div><!-- .event-content-wrap -->
                                </div><!-- .event-content -->
                            @endforeach
                        </div><!-- .col -->
                    @endif
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .latest-news-events -->
    @endif

    
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 align-content-lg-stretch">
                    <header class="heading">
                        <h2 class="entry-title">Sobre a EMCAC</h2>

                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </header><!-- .heading -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 flex align-content-center mt-5 mt-lg-0">
                    <div class="ezuca-video position-relative">
                        <img src="{{asset('site/images/video-screenshot.png')}}" alt="">
                    </div><!-- .ezuca-video -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-section -->
    
    <footer class="site-footer" >
        <div class="footer-widgets" style="background-color: #383749;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="{{asset('/')}}" rel="home">EM<span>CAC</span></a></h1>
                            </div>

                            <p style="color: #a0a0a0;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. </p>

                            <p class="footer-copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2 style="color: #fff;">Fale Conoscos</h2>

                            <ul style="color: #a0a0a0;">
                                <li>Email: info.deertcreative@gmail.com</li>
                                <li>Phone: (+88) 111 555 666</li>
                                <li>Address: 40 Baria Sreet 133/2 NewYork City, US</li>
                            </ul>
                        </div><!-- .foot-contact -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-lg-0">
                        <div class="follow-us">
                            <h2 style="color: #fff;">Siga-nos</h2>

                            <ul class="follow-us flex flex-wrap align-items-center">
                                <li><a href="https://www.facebook.com/colonia.agricola" target="blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div><!-- .quick-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-center align-items-center">

                    <div class="col-12">
                        <div class="footer-bar-nav">
                            <ul class="flex flex-wrap justify-content-center justify-content-lg-center align-items-center">
                                <li><a href="#">DPA</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- .footer-bar-nav -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='site/js/jquery.js'></script>
    <script type='text/javascript' src='site/js/swiper.min.js'></script>
    <script type='text/javascript' src='site/js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='site/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='site/js/custom.js'></script>

</body>
</html>
