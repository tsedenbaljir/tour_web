@extends('layouts.main')
@section('content')
@section('title','note')
@section('posts_title', 'Бидний тухай')
@section('text', 'Та бүхэндээ олон олон аялал хүсье ❤️')
@section('src', 'users/img/bidnii/bidnii1.jpg')
<section class="bg-light" style="font-family: times, serif;">
<video width="80%" controls autoplay style="margin:3% 10%">
    <source src="{{ asset('users/text/cover.mp4') }}" type="video/mp4">
    <source src="{{ asset('users/text/cover.ogg') }}" type="video/ogg">
    Your browser does not support HTML5 video.
  </video>

</section>
@endsection
