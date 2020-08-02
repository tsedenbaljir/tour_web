@extends('layouts.main')
@section('content')
@section('title','Contact')
@section('posts_title', 'Холбоо барих')
@section('text', 'Та Хаашаа аялах вэ? ❤️')
@section('src', 'users/img/bidnii.jpg')
<section class="section blog-post-entry bg-pattern">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up" style="font-size: 50px"></h2>
            <p class="lead" data-aos="fade-up"></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($header as $item)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
                <div class="media media-custom d-block mb-4">
                    <a href="/Хаашаа_аялах_вэ/{{ $item->name }}" class="mb-4 d-block">
                        <img src="{{asset($item->src)}}" alt="Image placeholder" class="img-fluid">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection
