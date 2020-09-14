<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\New_post;

class news extends Controller
{
    public function index(){
       $service = New_post::all();
       return view ('client/english/note',['service'=>$service]);
    }
    public function find($id){
        $service = New_post::findOrFail($id);
        return view('client/english/note_temp',['service'=>$service]);
    }
}
