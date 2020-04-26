<!doctype html>
<html lang="en">
<head>
    <title>Хямд аялах аргаа заая</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="ico/home1.ico" type="image/ico" />
    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href={{ asset('"users/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('users/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('users/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('users/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('users/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('users/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{ asset('users/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{ asset('users/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('users/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('users/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('users/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('users/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('users/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('users/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('users/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('users/fonts/fontawesome/css/font-awesome.min.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('users/css/style.css')}}">
</head>
<body>

    <header class="site-header">
        <div class="container-fluid">
            <div class="row">
                <!--<img href="index.html" src="img/img1.png" width="42" height="42"> -->
                <div class="col-4 site-logo" data-aos="fade"><a href="index.html"><em></em></a></div>
                <div class="col-8">


                    <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- END menu-toggle -->
                    <div class="site-navbar js-site-navbar">
                        <nav role="navigation">
                            <div class="container">
                                <div class="row full-height align-items-center">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled menu">
                                            <li class=" {{ Request::is('/') ? 'active' : '' }}"><a href="/">Нүүр</a></li>
                                            <li class=" {{ Request::is('note*') ? 'active' : '' }}"><a href="{{ asset('note/') }}">Тэмдэглэл</a></li>
                                            <li class=" {{ Request::is('about*') ? 'active' : '' }}"><a href="{{ asset('about/') }}">Бидний тухай</a></li>
                                            <li class=" {{ Request::is('blank*') ? 'active' : '' }}"><a href="{{ asset('blank/') }}">Зөвөлгөө</a></li>
                                            <li class=" {{ Request::is('contact*') ? 'active' : '' }}"><a href="{{ asset('contact/') }}">Холбоо барих</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 extra-info">
                                        <div class="row">
                                            <div class="col-md-6 mb-5">
                                                <h3><b>Холбоо барих</b></h3>
                                                <p><b>Улаанбаатар хот Баянгол дүүрэг</b> <br> Монгол Улс. <b>MN</b></p>
                                                <p><b>s.nominerdene_0201@yahoo.com</b></p>
                                                <p><b>+976 88334138</b></p>

                                            </div>
                                            <div class="col-md-6">
                                                <h3><b>Social Холбоос</b></h3>
                                                <ul class="list-unstyled">
                                                    <li><a href="https://www.facebook.com/uursduuayltsgaaya/" target="_blank"><b>Facebook</b></a></li>
                                                    <li><a href="https://www.instagram.com/hyamd_ayalii/" target="_blank"><b>Instagram</b></a></li>
                                                    <li><a href="https://twitter.com/AyaliiHyamd" target="_blank"><b>Twitter</b></a></li>
                                                    <li><a href="https://www.youtube.com/channel/UCi6tgMgIZ3gQz0WXiBk04Bg" target="_blank"><b>Youtube</b></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END head -->
    {{-- @if(Request::is('blank')||Request::is('blank/*')) --}}
    @if(View::hasSection('posts_title'))
    <section class="site-hero overlay" style="background-image: url(@yield('src')); background-attachment: fixed; background-position: center;">
        <div class="container" style="margin-top: ">
            <a href=""> <img src="{{ asset('users/img/logo1.png') }}" width="100px" height="100px" style="position: absolute;"></a>
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up" style="font-size: 60px; margin-top: -150px; font-family: 'Charmonman', cursive;">@yield('posts_title')</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Charmonman', cursive; margin-top: 20px"> <i> @yield('text') <i></p>
                </div>
            </div>
            {{-- @endif --}}
        </div>
    </section>
    @else
    <section class="site-hero overlay" style="background-image: url({{ asset('users/img/main.jpg') }}); background-attachment: fixed; background-position: center;">
        <div class="container" style="margin-top: ">
            <a href=""> <img src="{{ asset('users/img/logo1.png') }}" width="100px" height="100px" style="position: absolute;"></a>
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up" style="font-size: 60px; margin-top: -150px; font-family: 'Charmonman', cursive;">Хямд аялах аргаа заая</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Charmonman', cursive; margin-top: 20px"> <i> Адал явдалыг эрэлхийлэгчдэд зориулав <i></p>
                </div>
            </div>
            {{-- @endif --}}
        </div>
    </section>
    @endif
    @yield('content')


    <!-- Footer -->
    <footer class="page-footer font-small indigo" style="margin-top: -100px">
        <br>
        <br>
        <br>
        <br>
        <!-- Footer Links -->
        <div class="container">

            <!-- Grid row-->
            {{-- <div class="row text-center d-flex justify-content-center pt-5 mb-3">

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="index.html">Нүүр</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="temdeglel.html">Тэмдэглэл</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="bidnii.html">Бидний тухай</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="zowolgoo.html">Зөвөлгөө</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="holboo.html">Холбоо барих</a>
                    </h6>
                </div>
                <!-- Grid column -->

            </div> --}}
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">

            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

                <!-- Grid column -->
                <div class="col-md-8 col-12 mt-5">
                    <p style="line-height: 1.7rem">"Харанхуй нь харанхуйг арилгаж чадахгүй. Зөвхөн гэрэл л үүнийг хийж чадна.
                        Үзэн ядалт нь үзэн ядалтыг хөөх аргагүй юм. Зөвхөн хайр л үүнийг хийж чадна. "</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->
            <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

            <!-- Grid row-->
            <div class="row pb-3">

                <!-- Grid column -->
                <div class="col-md-12">

                    <div class="social-menu" style="margin-top: 50px">

                        <ul>
                            <li><a href="https://www.facebook.com/uursduuayltsgaaya/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/hyamd_ayalii/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/AyaliiHyamd" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCi6tgMgIZ3gQz0WXiBk04Bg" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-tripadvisor" target="_blank"></i></a></li>
                        </ul>

                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Бүх эрх хуулиар хамгаалагдсан <b>© 2020</b>
            <a href="https://www.legalinfo.mn/law/details/283" target="_blank"> - Хуулбарлахыг хориглоно. </a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <script src="{{ asset('users/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('users/js/popper.min.js')}}"></script>
    <script src="{{ asset('users/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('users/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('users/js/aos.js')}}"></script>
    <script src="{{ asset('users/js/main.js')}}"></script>
</body>
</html>
