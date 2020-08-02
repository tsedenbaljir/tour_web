<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home_header;
class header extends Controller
{
    public function index(){
        $header = Home_header::all();
        return view ('client/english/contact',['header'=>$header]);
    }
    public function find($id){
        $header = Home_header::findOrFail($id);
        return view('client/english/service_temp',['header'=>$header]);
    }
}
