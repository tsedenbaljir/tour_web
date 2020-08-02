<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mongolia;
use App\ServiceMongolia;
class mgl extends Controller
{
    public function index(){
        $service = Mongolia::orderBy('updated_at', 'desc')->paginate(5);
        return view ('client/english/mgl',['service'=>$service]);
    }
    public function find($id){
        $service = Mongolia::findOrFail($id);
        return view('client/english/mgl_temp',['service'=>$service]);
    }
    public function mongolia(){
        $service = ServiceMongolia::all();
        return view ('client/mongolia/service',['service'=>$service]);
    }
    public function findMongolia($id){
        $service = ServiceMongolia::findOrFail($id);
        return view('client/mongolia/service_temp',['service'=>$service]);
    }
}
