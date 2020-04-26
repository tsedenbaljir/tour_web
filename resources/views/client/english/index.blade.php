@extends('layouts.main')
@section('content')
@section('title','Home')

<!-- END section -->

<section class="section blog-post-entry bg-pattern">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="heading" data-aos="fade-up" style="font-size: 50px">Сүүлд нэмсэн тэмдэглэл</h2>
                <p class="lead" data-aos="fade-up">Амьдралаа сайхан өнгөрөөх сайхан газар.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

                <div class="media media-custom d-block mb-4">
                    <a href="#" class="mb-4 d-block"><img src="users/img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <span class="meta-post" style="color: #000000"><b>january 14, 2020</b></span>
                        <h2 class="mt-0 mb-3"><a href="#">Bali Indonesian<br> Southeast Asia </a></h2>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
                <div class="media media-custom d-block mb-4">
                    <a href="#" class="mb-4 d-block"><img src="users/img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <span class="meta-post" style="color: #000000"><b>July 20, 2019</b></span>
                        <h2 class="mt-0 mb-3"><a href="#">Vietnam <br>Southeast Asia</a></h2>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
                <div class="media media-custom d-block mb-4">
                    <a href="#" class="mb-4 d-block"><img src="users/img/img_5.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <span class="meta-post" style="color: #000000"><b>May 26, 2019</b></span>
                        <h2 class="mt-0 mb-3"><a href="#">Lake Baikal <br> Russia</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END section -->
<div class="site-blocks-cover overlay inner-page-cover" style="width: 100%; height: 500px ;background-position: center ;background-image: url(users/img/main.jpg); background-attachment: fixed; background-position: center; width: 100%;height: 500px ; background-size: cover;">

    <div class="container text-center">

        <h1 s tyle="color: white;">Хямд аялах арга заая</h1>
        <h1 style="color: white;">Тавтай морил</h1>
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
                <video width="100%" controls>
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
                <video width="100%" height="50%" autoplay muted>
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
                <video width="100%" controls>
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
                <h2 class="heading" data-aos="fade-right">"Хямд аялах аргаа заая" булан</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-3 visit mb-3" data-aos="fade-right">
                <a href="restaurant.html">
                    <img src="{{ asset('users/img/aylal9/6.jpg') }}" alt="Image placeholder" class="img-fluid" height="63%"> </a>
                <h3><a href="restaurant.html">Найрамдах Социалист Вьетнам Улс <br>Зүүн Өмнөд Ази</a></h3>
                <div class="reviews-star float-left">
                    <!--<span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star-half"></span>
            <span class="ion-android-star-outline"></span> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 visit mb-3" data-aos="fade-right" data-aos-delay="100">
                <a href="restaurant.html"><img src="{{ asset('users/img/aylal10/4.jpg') }}" alt="Image placeholder" class="img-fluid" height="63%"> </a>
                <h3><a href="restaurant.html">Bali Indonesian<br> Зүүн Өмнөд Ази </a></h3>
                <div class="reviews-star float-left">
                    <!--<span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star-half"></span>
            <span class="ion-android-star-outline"></span> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 visit mb-3" data-aos="fade-right" data-aos-delay="200">
                <a href="hotel.html"><img src="{{ asset('users/img/aylal12/10.jpg') }}" alt="Image placeholder" class="img-fluid" style=" height:63%"> </a>
                <h3><a href="hotel.html">Францын бүгд найрамдах улс<br>Зүүн Өмнөд Ази</a></h3>
                <div class="reviews-star float-left">
                    <!--<span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star-half"></span>
            <span class="ion-android-star-outline"></span> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 visit mb-3" data-aos="fade-right" data-aos-delay="300">
                <a href="yacht.html"><img src="{{ asset('users/img/aylal11/1.jpg') }}" alt="Image placeholder" class="img-fluid" height="63%"> </a>
                <h3><a href="yacht.html">Байгаль нуур<br>Оросын Холбооны Улс</a></h3>
                <div class="reviews-star float-left">
                    <!--<span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star-half"></span>
            <span class="ion-android-star-outline"></span> -->
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="section visit-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading" data-aos="fade-right">"Зөвөлгөө" булан</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right">
                <a href="restaurant.html"><img src="users/img/img_1.jpg" alt="Image placeholder" class="img-fluid"> </a>
                <h3><a href="restaurant.html">Найрамдах Социалист Вьетнам Улс <br>Зүүн Өмнөд Ази</a></h3>
                <div class="reviews-star float-left">
                    <!--<span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star-half"></span>
            <span class="ion-android-star-outline"></span> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="100">
                <a href="restaurant.html"><img src="users/img/img_2.jpg" alt="Image placeholder" class="img-fluid"> </a>
                <h3><a href="restaurant.html">Bali Indonesian<br> Зүүн Өмнөд Ази </a></h3>
                <div class="reviews-star float-left">
                    <!--<span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star-half"></span>
            <span class="ion-android-star-outline"></span> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="200">
                <a href="hotel.html"><img src="users/img/img_4.jpg" alt="Image placeholder" class="img-fluid"> </a>
                <h3><a href="hotel.html">Францын бүгд найрамдах улс<br>Зүүн Өмнөд Ази</a></h3>
                <div class="reviews-star float-left">
                    <!--<span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star-half"></span>
            <span class="ion-android-star-outline"></span> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="300">
                <a href="yacht.html"><img src="users/img/img_5.jpg" alt="Image placeholder" class="img-fluid"> </a>
                <h3><a href="yacht.html">Байгаль нуур<br>Оросын Холбооны Улс</a></h3>
                <div class="reviews-star float-left">
                    <!--<span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star"></span>
            <span class="ion-android-star-half"></span>
            <span class="ion-android-star-outline"></span> -->
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="section slider-section" style="">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="heading" data-aos="fade-up" style="font-size: 40px">Та бүхэндээ олон олон аялал хүсье❤️</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">Миний сэтгэлд хоногшсон аялалууд</p>
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
<!-- END section -->
{{-- <section class="section testimonial-section" style="">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="heading" data-aos="fade-up">Аялагч сэтгүүлчид</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial text-center">
                    <div class="author-image mb-3">
                        <img src="users/img/naiz1.jpg" alt="Image placeholder" class="rounded-circle">
                    </div>
                    <blockquote>
                        <a href="" style="font-size: 20px">Зөвөлгөө булан</a>
                    </blockquote>
                    <p><em>&ldquo; С. Номин-Эрдэнэ&ldquo;</em></p>

                </div>
            </div>
            <!-- END col -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial text-center">
                    <div class="author-image mb-3">
                        <img src="users/img/person_1.jpg" alt="Image placeholder" class="rounded-circle">
                    </div>
                    <blockquote>
                        <a href="" style="font-size: 20px">Булан</a>
                    </blockquote>
                    <p><em>&ldquo; Н. Эрдэнэпүрэв&ldquo;</em></p>
                </div>
            </div>
            <!-- END col -->

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial text-center">
                    <div class="author-image mb-3">
                        <img src="users/img/person_3.jpg" alt="Image placeholder" class="rounded-circle">
                    </div>
                    <blockquote>

                        <a href="" style="font-size: 20px">Булан</a>
                    </blockquote>
                    <p><em>&ldquo; Д. Учрал&ldquo;</em></p>
                </div>
            </div>
            <!-- END col -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial text-center">
                    <div class="author-image mb-3">
                        <img src="users/img/person_2.jpg" alt="Image placeholder" class="rounded-circle">
                    </div>
                    <blockquote>

                        <a href="" style="font-size: 20px">Булан</a>
                    </blockquote>
                    <p><em>&ldquo; П. Ууганцэцэг&ldquo;</em></p>
                </div>
            </div>
            <!-- END col -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial text-center">
                    <div class="author-image mb-3">
                        <img src="users/img/naiz2.jpg" alt="Image placeholder" class="rounded-circle">
                    </div>
                    <blockquote>

                        <a href="" style="font-size: 20px">Булан</a>
                    </blockquote>
                    <p><em>&ldquo; Ж. Даваахүү&ldquo;</em></p>
                </div>
            </div>
            <!-- END col -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial text-center">
                    <div class="author-image mb-3">
                        <img src="users/img/naiz3.jpg" alt="Image placeholder" class="rounded-circle">
                    </div>
                    <blockquote>

                        <a href="" style="font-size: 20px">Булан</a>
                    </blockquote>
                    <p><em>&ldquo; Ч. Тэлмэн&ldquo;</em></p>
                </div>
            </div>
            <!-- END col -->
        </div>
    </div>
</section> --}}
@endsection
