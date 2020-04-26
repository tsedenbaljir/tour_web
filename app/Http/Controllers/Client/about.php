<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class about extends Controller
{
    public function index(){
       return view ('client/english/about');
    }
}
