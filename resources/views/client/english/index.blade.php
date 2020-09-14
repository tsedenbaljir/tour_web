@extends('layouts.main')
@section('content')
@section('title','Home')
<!-- END section -->
<br>
<section class="section blog-post-entry bg-pattern">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="heading" data-aos="fade-up" style="font-size: 30px">Сүүлд нэмсэн тэмдэглэл</h2>
                <!-- <p class="lead" data-aos="fade-up">Амьдралаа сайхан өнгөрөөх сайхан газар.</p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

                <div class="media media-custom d-block mb-4">
                    <a href="#" class="mb-4 d-block"><img src="users/img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                         <h2 class="mt-0 mb-3"><a href="#" >Бали Индонез</a></h2>
                        <span class="meta-post" style="color: #000000"><b>Бид энэ хорвоод ганцхан л ☝️ амьдрах болохоор энэ орчлонгийн хамгийн сайхныг мэдрэх ёстой биз</b></span>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
                <div class="media media-custom d-block mb-4">
                    <a href="#" class="mb-4 d-block"><img src="users/img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="#"> Вьетнам</a></h2>
                        <span class="meta-post" style="color: #000000"><b>Миний хувьд очиж байсан газруудаас сэтгэлд тод үлдсэн орнуудын нэг ТУРК улс байсан шүү </b></span>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
                <div class="media media-custom d-block mb-4">
                    <a href="#" class="mb-4 d-block"><img src="users/img/img_5.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="#">Байгаль нуур</a></h2>
                        <span class="meta-post" style="color: #000000"><b>Тѳлѳвлѳж байсан аялал минь бүтэлгүйтэж, ѳѳртѳѳ уур хүрч нүдэндээ нулимстай буцахдаа ийм гайхалтай аялал болж эргэнэ гэж мэдсэнгүй шүү.</b></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END section -->
<div class="site-blocks-cover overlay inner-page-cover" style="width: 100%; height: 500px ;background-position: center ;background-image: url(users/img/main.jpg); background-attachment: fixed; background-position: center; width: 100%;height: 500px ; background-size: cover;">

    <div class="container text-center">

        <h1 style="color: white;">♥</h1>
        <h1 style="color: white;">↓</h1>
        <div style="width: 31%; float:left; margin-left:2%;">
            <img src="users/text/1.jpg" class="img-fluid" data-toggle="modal" data-target="#play-video-1">
        </div>
        <div style="width: 31%; float:left; margin-left:2%;">
            <img src="users/text/2.jpg" class="img-fluid" data-toggle="modal" data-target="#play-video-2">
        </div>
        <div style="width: 31%; float:left; margin-left:2%;">
            <img src="users/text/3.jpg" class="img-fluid" data-toggle="modal" data-target="#play-video-3">
        </div>
    </div>
</div>
<div class="modal fade" id="play-video-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <video width="100%" height="50%" controls>
                    <source src="{{ asset('users/text/aylal1.mp4') }}" type="video/mp4">
                </video>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="play-video-2">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <video width="100%" height="50%" controls>
                    <source src="{{ asset('users/text/aylal2.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="play-video-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <video width="100%" height="50%" controls>
                    <source src="{{ asset('users/text/aylal3.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
</div>
<section class="section visit-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading" data-aos="fade-right"></h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div id="fiveMenu" class="col-lg-2 col-md-2 visit mb-2" data-aos="fade-right">
                <a href="/Хаашаа_аялах_вэ">
                    <img src="{{ asset('users/img/template.jpg') }}" alt="Image placeholder" class="img-fluid" height="63%"> </a>
                <h3><a href="#" style="font-size: 13px;">Хаашаа аялах вэ?</a></h3>
                <div class="reviews-star float-left">
                </div>
            </div>
            <div id="fiveMenu" class="col-lg-2 col-md-2 visit mb-2" data-aos="fade-right" data-aos-delay="100">
                <a href="Монголдоо_аялцгаая"><img src="{{ asset('users/img/template2.jpg') }}" alt="Image placeholder" class="img-fluid" height="63%"> </a>
                <h3><a href="#" style="font-size: 13px">&nbsp;Аяллын хөтөч</a></h3>
                <div class="reviews-star float-left">
                </div>
            </div>
            <div id="fiveMenu" class="col-lg-2 col-md-2 visit mb-2" data-aos="fade-right" data-aos-delay="200">
                <a href="/Аяллын_тэмдэглэл"><img src="{{ asset('users/img/template3.jpg') }}" alt="Image placeholder" class="img-fluid" style=""> </a>
                <h3><a href="#" style="font-size: 13px">Аяллын тэмдэглэл</a></h3>
                <div class="reviews-star float-left">
                </div>
            </div>
            <div id="fiveMenu" class="col-lg-2 col-md-2 visit mb-2" data-aos="fade-right" data-aos-delay="300">
                <a href="Аяллын_зөвлөгөө"><img src="{{ asset('users/img/template5.jpg') }}" alt="Image placeholder" class="img-fluid" height="63%"> </a>
                <h3><a href="#" style="font-size: 13px">Аяллын зөвлөгөө</a></h3>
                <div class="reviews-star float-left">
                </div>
            </div>
            <div id="fiveMenu" class="col-lg-2 col-md-2 visit mb-2" data-aos="fade-right" data-aos-delay="300">
                <a href="/Аяллын_зөвлөгөө"><img src="{{ asset('users/img/template4.jpg') }}" alt="Image placeholder" class="img-fluid" height="63%"> </a>
                <h3><a href="#" style="font-size: 13px">&nbsp;Мэдээ Мэдээлэл</a></h3>
                <div class="reviews-star float-left">
                </div>
            </div>
        </div>
    </div>
    <style>
        @media screen and (min-width:600px){
            #fiveMenu{
                margin-left:30px;
            }
        }
    </style>
</section>
<hr>
<section class="section slider-section" style="">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="heading" data-aos="fade-up" style="font-size:30px">Та бүхэндээ олон олон аялал хүсье❤️</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="slider-item">
                        <a href="aylal2.html"><img src="users/img/index/1.jpg" alt="Image placeholder" class="img-fluid">
                            <a class="more" href="aylal2.html"><span>Дэлгэрэнгүй</span></a>
                    </div></a>
                    <div class="slider-item">
                        <a href="#"> <img src="users/img/index/2.jpg" alt="Image placeholder" class="img-fluid">
                            <a class="more" href=""><span>Дэлгэрэнгүй</span></a>
                    </div></a>
                    <div class="slider-item">
                        <a href=""><img src="users/img/index/3.jpg" alt="Image placeholder" class="img-fluid">
                            <a class="more" href=""><span>Дэлгэрэнгүй</span></a>
                    </div></a>
                    <div class="slider-item">
                        <a href="#"><img src="users/img/index/4.jpg" alt="Image placeholder" class="img-fluid">
                            <a class="more" href="aylal2.html"><span>Дэлгэрэнгүй</span></a>
                    </div></a>
                    <div class="slider-item">
                        <a href="#"><img src="users/img/index/5.jpg" alt="Image placeholder" class="img-fluid">
                            <a class="more" href=""><span>Дэлгэрэнгүй</span></a>
                    </div></a>
                    <div class="slider-item">
                        <a href="#"><img src="users/img/index/6.jpg" alt="Image placeholder" class="img-fluid">
                            <a class="more" href=""><span>Дэлгэрэнгүй</span></a>
                    </div></a>
                </div>
                <!-- END slider -->
            </div>
            <div class="col-md-12 text-center"><a href="#" class=""></a></div>
        </div>
    </div>
</section>
@endsection
