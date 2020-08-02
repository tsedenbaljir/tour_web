<!doctype html>
<html lang="en">
<head>
    <title>Хямд аялах аргаа заая</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="users/ico/home1.ico" type="image/ico" />
    <link rel="icon" href="{{ asset(' type="image/ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link href="http://allfont.net/allfont.css?fonts=brushtype-normal">
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
                <a href="/"><img src="{{ asset('users/img/logo1.png') }}" width="150px" height="150px" style="position: absolute;margin-left:20px;margin-top:-40px;"></a>
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
                                            <li class=" {{ Request::is('Хаашаа_аялах_вэ*') ? 'active' : '' }}"><a href="{{ asset('Хаашаа_аялах_вэ/') }}">Хаашаа аялах вэ?</a></li>
                                            <li class=" {{ Request::is('Монголдоо_аялцгаая*') ? 'active' : '' }}"><a href="{{ asset('Монголдоо_аялцгаая/') }}">Монголдоо аялцгаая</a></li>
                                            <li class=" {{ Request::is('Аяллын_тэмдэглэл*') ? 'active' : '' }}"><a href="{{ asset('Аяллын_тэмдэглэл/') }}">Аяллын тэмдэглэл</a></li>
                                            <li class=" {{ Request::is('Аяллын_зөвлөгөө*') ? 'active' : '' }}"><a href="{{ asset('Аяллын_зөвлөгөө/') }}">Аяллын зөвлөгөө</a></li>

                                            <li class=" {{ Request::is('Мэдээ_мэдээлэл*') ? 'active' : '' }}"><a href="{{ asset('Мэдээ_мэдээлэл/') }}">Мэдээ мэдээлэл</a></li>
                                            <li class=" {{ Request::is('Бидний_тухай*') ? 'active' : '' }}"><a href="{{ asset('Бидний_тухай/') }}">Бидний тухай</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 extra-info" id="social">
                                        <div class="row">
                                            <div class="col-md-6 mb-5">
                                                <h3><b>Холбоо барих</b></h3>
                                                <p><b>Улаанбаатар хот Баянгол дүүрэг</b> <br> Монгол Улс</p>
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
                                    <style>
                                        @media screen and (max-width: 600px) {
                                            #social {
                                                display: none;
                                            }
                                        }

                                    </style>
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
            {{-- <a href="/"> <img src="{{ asset('users/img/logo1.png') }}" width="100px" height="100px" style="position: absolute;"></a> --}}
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up" style="font-size: 60px; margin-top: -150px;  font-family: 'BrushType Normal',arial;>@yield('posts_title')</h1>
                    <p class=" sub-heading mb-5" data-aos="fade-up" data-aos-delay="100" style="  font-family: 'BrushType Normal', arial;
; margin-top: 20px"> <i> @yield('text') <i></p>
                </div>
            </div>
            {{-- @endif --}}
        </div>
    </section>
    @else
    <section class="site-hero overlay" style="background-image: url({{ asset('users/img/main.jpg') }}); background-attachment: fixed; background-position: center;">
        <div class="container" style="margin-top: ">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up" style="font-size: 60px; margin-top: -150px;   font-family: 'BrushType Normal', arial;">Хямд аялах аргаа заая</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100" style="  font-family: 'BrushType Normal', arial;
; margin-top: 20px"> <i> Адал явдалыг эрэлхийлэгчдэд зориулав <i></p>
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
    {{-- social --}}
    <div class="socials" style="z-index: 9990;">
        <a id="socialfacebook" class="faicon-facebook" href="https://www.facebook.com/480323449227561/" alt="facebook" target="_blank"><i class="fa fa-facebook" style="margin: 2px 0 20px -10px;position: absolute;"></i></a>
        <a id="socialtwitter" class="faicon-twitter" href="https://twitter.com/AyaliiHyamd" alt="twitter" target="_blank"><i class="fa fa-twitter" style="margin: 2px 0 20px -10px;position: absolute;"></i></a>
        <a id="socialtwitter" class="faicon-twitter" href="https://www.instagram.com/hyamd_ayalii/" alt="instegram" style="background: linear-gradient(to bottom left, #f7288f, #ff9933);" target="_blank"><i class="fa fa-instagram" style="margin: 2px 0 20px -10px;position: absolute;"></i></a>
        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true
                    , version: 'v7.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

        </script>

        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat" attribution=setup_tool page_id="542900859414757" theme_color="#20cef5" logged_in_greeting="Сайн байна уу? Холбогдсонд баярлалаа. Бид танд хэрхэн туслах вэ?" logged_out_greeting="Сайн байна уу? Холбогдсонд баярлалаа. Бид танд хэрхэн туслах вэ?">
        </div>
    </div>

    <script type="text/javascript">
        //<![CDATA[
        jQuery("#backtotop").click(function() {
            jQuery("body,html").animate({
                scrollTop: 0
            }, 600);
        });
        jQuery(window).scroll(function() {
            if (jQuery(window).scrollTop() > 150) {
                jQuery("#backtotop").addClass("visible");
            } else {
                jQuery("#backtotop").removeClass("visible");
            }
        });
        //]]>

    </script>
    <style>
        #socialfacebook {
            margin-top: 15px;
            z-index: 999;
            display: block;
            text-decoration: none;
            padding-top: 10px;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 26px;
            text-align: center;
            background: #3B5998;
            border-radius: 50%;
            color: #FFFFFF;
        }

        #socialtwitter {
            margin-top: 5px;
            z-index: 999;
            display: block;
            text-decoration: none;
            padding-top: 10px;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 26px;
            text-align: center;
            background: #00ACEE;
            border-radius: 50%;
            color: #FFFFFF;
        }

        #socialfacebookmessenger {
            margin-top: 5px;
            z-index: 999;
            display: block;
            text-decoration: none;
            right: 20px;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background: #0084ff;
            border-radius: 50%;
            padding-top: 4px;
            color: #FFFFFF;
        }

        .socials {
            position: fixed;
            top: 50%;
            width: 50px;
            right: 20px;
        }

        #backtotop {
            margin-top: 5px;
            border-radius: 50px;
            z-index: 999;
            display: inline-block;
            text-decoration: none;
            padding-top: 10px;
            bottom: 10px;
            right: 25px;
            width: 50px;
            height: 50px;
            line-height: 36px;
            font-size: 26px;
            text-align: center;
            display: none;
        }

        #backtotop.visible {
            visibility: visible;
            display: block;
        }

        #backtotop {
            color: white;
            background-color: #3B5998;
        }

        p[data-f-id="pbf"]{
        display:none;}
    </style>
    {{-- social end --}}
    <!-- Footer -->
    <!--
author: Цэдэнбалжир/chinggis666
-->
    <script src="{{ asset('users/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('users/js/popper.min.js')}}"></script>
    <script src="{{ asset('users/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('users/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('users/js/aos.js')}}"></script>
    <script src="{{ asset('users/js/main.js')}}"></script>
</body>
</html>
