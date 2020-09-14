<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\New_post;
class adminNews extends Controller
{
    public function index(){
        return view('admin/news');
    }
    public function saveEnglish(Request $req){
        $id = $req->id;

        // text update
        if(empty($req->hasFile('file'))){
            $service = New_post::find($id);
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $service->data = $req->data;
            $service->save();
        }
        // update
        else if($id!=='0' && $req->hasFile('file')){
            $service = New_post::find($id);
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/upload'), $imageName);
            $path = "/image/upload/".$imageName;
            $service->src = $path;
            $service->data = $req->data;
            $service->save();
        }
        // add
        else{
            $service = new New_post();
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('image/upload'), $imageName);
            $path = "/image/upload/".$imageName;
            $service->src = $path;
            $service->data = $req->data;
            $service->save();
        }
        return back();
    }
    public function getEnglish(){
        $service  = New_post::all();
        return response()->json($service);
    }
    public function deleteEnglish($id){
        $service = New_post::find($id);
        $service->delete();
        return back();
    }
    public function findEnglish($id){
        $service = New_post::find($id);
        return response()->json($service);
    }
}
