@extends('layouts.main')
@section('content')
@section('title','note')
@section('posts_title', 'Аялалын Тэмдэглэл')
@section('text', 'Монголдоо аялцгаая')
@section('src', 'users/img/temdeglel.jpg')
<section class="bg-light" style="font-family: times, serif;">
    @foreach($service as $post)
    @if($post->id%2)
    <div class="half d-md-flex d-block">
        <div class="image order-2" data-aos="fade" style="background-image: url('{{ $post->src }}');"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
            <h2 style="font-size: 40px">{{ $post->title }}</h2><br><br>
            <p style="font-size: 20px">{!! $post->desc !!}</p>
            <p class="mt-5"><a href="/Хаашаа_аялах_вэ/{{$post->id}}" class="btn btn-primary uppercase">
            Дэлгэрэнгүй</a></p>
        </div>
    </div>
    @else
    <div class="half d-md-flex d-block">
        <div class="image" data-aos="fade" style="background-image: url('{{ $post->src }}');"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
            <h2 style="font-size: 40px">{{ $post->title }}</h2><br><br>
            <p style="font-size: 20px">{!! $post->desc !!}</p>
            <p class="mt-5"><a href="/Хаашаа_аялах_вэ/{{$post->id}}" class="btn btn-primary uppercase">
            Дэлгэрэнгүй</a></p>
        </div>
    </div>
    @endif
    @endforeach

</section>

<div class="Page navigation example">
    {{$service->links()}}
</div>
<!-- END section -->
{{-- <section class="section slider-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <h2 class="heading" data-aos="fade-up"></h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100"></p>
            </div>
        </div>
    </div>
    </div>
</section> --}}
<!-- END section -->

{{-- <section class="section blog-post-entry bg-pattern">
    <div class="container">
        <div class="block-27">
            <ul style="margin-left: 398px;">
                <li class="active"><span>1</span></li>
                <li><a href="zowolgoo2.html">2</a></li>
                <li><a href="zowolgoo3.html">3</a></li>
                <li><a href="zowolgoo4.html">4</a></li>
                <li><a href="zowolgoo5.html">5</a></li>
                <li><a>6</a></li>
            </ul>
        </div>

</section> --}}

@endsection
