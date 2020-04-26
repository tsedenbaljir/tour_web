@extends('layouts.main')
@section('content')
@section('title','Blank')
@section('posts_title', 'Зөвөлгөө')
@section('text', 'Та бүхэндээ олон олон аялал хүсье ❤️')
@section('src', 'users/img/zowolgoo.jpg')
<section class="bg-light" style="font-family: times, serif;">
    @foreach($service as $post)
    @if($post->id%2)
    <div class="half d-md-flex d-block">
        <div class="image order-2" data-aos="fade" style="background-image: url('{{ $post->src }}');"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
            <h2 style="font-size: 40px">{{ $post->title }}</h2><br><br>
            <p style="font-size: 20px">{!! $post->desc !!}</p>
            <p class="mt-5"><a href="/blank/{{$post->id}}" class="btn btn-primary uppercase">
            Дэлгэрэнгүй</a></p>
        </div>
    </div>
    @else
    <div class="half d-md-flex d-block">
        <div class="image" data-aos="fade" style="background-image: url('{{ $post->src }}');"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
            <h2 style="font-size: 40px">{{ $post->title }}</h2><br><br>
            <p style="font-size: 20px">{!! $post->desc !!}</p>
            <p class="mt-5"><a href="/blank/{{$post->id}}" class="btn btn-primary uppercase">
            Дэлгэрэнгүй</a></p>
        </div>
    </div>
    @endif
    @endforeach

   {{-- <div class="half d-md-flex d-block">
        <div class="image" data-aos="fade" style="background-image: url('users/img/aylal4/aylal4.jpg');"></div>
        <div class="text" data-aos="fade-right" data-aos-delay="200">
            <h2 style="font-size: 40px"> </h2>

            <p style="font-size: 20px">
            <p class="mt-5"><a href="zowolgoo_23.html" class="btn btn-primary uppercase">Дэлгэрэнгүй</a></p>
        </div>
    </div> --}}
 {{--
    <div class="half d-md-flex d-block">
        <div class="image order-2" data-aos="fade" style="background-image: url('users/img/aylal3/aylal3.jpg');"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
            <h2 style="font-size: 40px">Бээжингийн ОНГОЦНЫ БУУДАЛ руу хэрхэн очих вэ?</h2><br>

            <p style="font-size: 20px">За Номио нь зѳвлѳгѳѳ, аялалын тэмдэглэлээ та нартаа хүргээгүй удсан байна шүү😇 Хүргэхийг ямар удаан хүлээсэн гээч. Одоо аялалдаа гарчихсан учраас бѳмбѳгдѳнѳ дѳѳ 😊 Ѳѳртѳѳ хэрэгтэй мэдээлэлээ хадаглаад аваарай. Хэзээ нэгэн цагт хэрэгтэй болно.<br><br>

                За ер нь дэлхийн хаашаа ч ниссэн Монголтой хамгийн ойрхон бас нислэг нь хамгийн хямд байдаг газар бол Бээжин хот👍 Бараг Бээжингээр дамжиж нисэхгүй хүн ховор байх.</p>

            <p class="mt-5"><a href="zowolgoo_22.html" class="btn btn-primary uppercase">Дэлгэрэнгүй</a></p>
        </div>
    </div>

    <div class="half d-md-flex d-block">
        <div class="image" data-aos="fade" style="background-image: url('users/img/aylal1/14.jpg')"></div>
        <div class="text" data-aos="fade-right" data-aos-delay="200">
            <h1 style="font-size: 40px"> Аялахад хэрэг болох аппликейшнууд ❤️</h1><br><br>

            <p style="font-size: 20px">"Хамгийн хамгийн" булангийнхаа 2-р дугаараар та бүхэндээ аялахад хэрэг болдог сонирхолтой аппликейшнуудыг хүргэж байна. </p>

            <p class="mt-5"><a href="zowolgoo_21.html" class="btn btn-primary uppercase">Дэлгэрэнгүй</a></p>

        </div>
    </div> --}}
</section>
<!-- END section -->
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="section slider-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <h2 class="heading" data-aos="fade-up"></h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100"></p>
            </div>
        </div>


    </div>
    </div>
</section>
<!-- END section -->

<section class="section blog-post-entry bg-pattern">
    <div class="container">

        <div class="block-27">
            <ul style="position: absolute;margin-top: -450px;margin-left: 398px;">
                <li class="active"><span>1</span></li>
                <li><a href="zowolgoo2.html">2</a></li>
                <li><a href="zowolgoo3.html">3</a></li>
                <li><a href="zowolgoo4.html">4</a></li>
                <li><a href="zowolgoo5.html">5</a></li>
                <li><a>6</a></li>
            </ul>
        </div>

        <!--<div class="row justify-content-center text-center mb-5">
         <div class="col-md-10">

           <h2 class="heading" data-aos="fade-up" style="margin-top: -400px">More Hotel Features</h2>
           <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
         </div>
       </div>
       <div class="row" style="margin-top: -200px">
         <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

           <div class="media media-custom d-block mb-4">
             <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
             <div class="media-body">
               <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
             </div>
           </div>

         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
           <div class="media media-custom d-block mb-4">
             <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
             <div class="media-body">
               <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
             </div>
           </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
           <div class="media media-custom d-block mb-4">
             <a href="#" class="mb-4 d-block"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
             <div class="media-body">
               <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
             </div>
           </div>
         </div>
         <div>

         </div>
       </div>
     </div>-->
</section>

@endsection
