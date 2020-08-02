@extends('layouts.main')
@section('content')
@section('title','Service')
<section class="bg-light" style="font-family: times, serif;">
    @foreach($service as $post)
    @if($post->id%2)
    <div class="half d-md-flex d-block">
        <div class="image order-2" data-aos="fade" style="background-image: url('{{ $post->src }}');"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
            <h2 style="font-size: 40px">{{ $post->title }}</h2><br><br>
            <p style="font-size: 20px">{!! $post->desc !!}</p>
            <p class="mt-5"><a href="/Аяллын_зөвлөгөө/{{$post->id}}" class="btn btn-primary uppercase">
            Дэлгэрэнгүй</a></p>
        </div>
    </div>
    @else
    <div class="half d-md-flex d-block">
        <div class="image" data-aos="fade" style="background-image: url('{{ $post->src }}');"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
            <h2 style="font-size: 40px">{{ $post->title }}</h2><br><br>
            <p style="font-size: 20px">{!! $post->desc !!}</p>
            <p class="mt-5"><a href="/Аяллын_зөвлөгөө/{{$post->id}}" class="btn btn-primary uppercase">
            Дэлгэрэнгүй</a></p>
        </div>
    </div>
    @endif
    @endforeach

</section>
<div class="Page navigation example">
    {{$service->links()}}
</div>
    @endsection
