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
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
</head>
<body>
    <div class="hero-content">
        <header>
            <div class="nav-bar" style="background-color: #56555B;">
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
                                    <li class="current-menu-item" disabled><a href="">EMCAC</a></li>
                                    <li><a href="{{asset('/')}}">Home</a></li>
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
        
    </div><!-- .hero-content -->

    <!-- Main Container -->
    <main id="main-container">
        @yield('site')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-widgets" style="background-color: #383749;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
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

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2 style="color: #fff;">Fale Conoscos</h2>

                            <ul style="color: #a0a0a0;">
                                <li>Email: info.deertcreative@gmail.com</li>
                                <li>Phone: (+88) 111 555 666</li>
                                <li>Address: 40 Baria Sreet 133/2 NewYork City, US</li>
                            </ul>
                        </div><!-- .foot-contact -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                        <div class="quick-links flex flex-wrap">
                            <h2 class="w-100" style="color: #fff;">Links Úteis</h2>

                            <ul class="w-50" >
                                <li><a href="#">About </a></li>
                                <li><a href="#">Terms of Use </a></li>
                                <li><a href="#">Privacy Policy </a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>

                            <ul class="w-50">
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Language Packs</a></li>
                                <li><a href="#">Release Status</a></li>
                            </ul>
                        </div><!-- .quick-links -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
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

<script type='text/javascript' src="{{asset('site/js/jquery.js')}}"></script>
<script type='text/javascript' src="{{asset('site/js/swiper.min.js')}}"></script>
<script type='text/javascript' src="{{asset('site/js/masonry.pkgd.min.js')}}"></script>
<script type='text/javascript' src="{{asset('site/js/jquery.collapsible.min.js')}}"></script>
<script type='text/javascript' src="{{asset('site/js/custom.js')}}"></script>
<script type='text/javascript' src="{{asset('site/js/modal.js')}}"></script>

<script src="https://unpkg.com/feather-icons"></script>

<script>
    feather.replace()
</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
<script type='text/javascript' src="{{asset('site/js/voltarTopo.js')}}"></script>

<body>
</html>