<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Note;
class notes extends Controller
{
    public function index(){
       $service = Note::all();
       return view ('client/english/note',['service'=>$service]);
    }
    public function find($id){
        $service = Note::findOrFail($id);
        return view('client/english/note_temp',['service'=>$service]);
    }
}
