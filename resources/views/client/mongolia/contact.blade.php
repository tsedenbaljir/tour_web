@extends('layouts.main-mn')
@section('content')
@section('title','Холбоо барих')
<div class="container hero-bg" style="margin-top:2%; padding-bottom:9.7%">
        <div class="wrapper bg-white" style="padding-bottom:10%; padding-top:0%; margin-bottom:2%">
            <div class="row" >
                <div class="col-md-12" style="text-align: center"><h1 class="font" style="padding-top: 2%">Холбоо барих</h1></div>
                <div class="col-md-12" style="padding-left:5%">
                </div>
                <div class="col-md-6 contact-info">
                    <div class="col-md-12" style="height: 75%;">
                        <iframe src="https://maps.google.com/maps?q=tamir%20wellness&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      </div>
                      <h3 class="font" style="text-align:center; padding-top: 2%; padding-bottom:1%">Хаяг</h3>
                  <div class="col-md-12" style="display: flex">
                      <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">phone</i>
                      <p class="font">{{$contact->phone_number}}</p>
                  </div>
                  <div class="col-md-12" style="display: flex">
                      <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">location_on</i>
                      <p class="font">{{$contact->location_mn}}</p>
                  </div>
                  <div class="col-md-12" style="display: flex">
                      <i class="material-icons" style="font-size:25px;color:rgba(33, 190, 33, 0.685)">mail</i>
                      <p class="font">{{$contact->email}}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12"><p class="send-us formcss font" style="padding-bottom:2%">Санал хүсэлтээ илгээх</p></div>
                  <div class="col-md-12" id="formcss"><input type="text" class="form-control" id="name form" placeholder="Нэр" name="name"></div>
                  <div class="col-md-12" id="formcss"><input type="email" class="form-control" id="email form" placeholder="Цахим хаяг" name="email"></div>
                  <div class="col-md-12" id="formcss"><input type="phone" class="form-control" id="number form" placeholder="Утасны дугаар" name="number"></div>
                  <div class="col-md-12" id="formcss"><textarea type="text" class="form-control" id="messagse form" placeholder="Хүсэлт" name="message" style="height: 110px"></textarea></div>
                  <div class="col-md-12"><button type="button" class="btn" style="background-color:rgba(40, 175, 40, 0.719); color:white;">Send</button></div>
                </div>
              </div>
        </div>
    </div>
    @endsection