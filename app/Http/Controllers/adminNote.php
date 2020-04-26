<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
class adminNote extends Controller
{
    public function index(){
        return view('admin/note');
    }
    public function saveEnglish(Request $req){
        $id = $req->id;

        // text update
        if(empty($req->hasFile('file'))){
            $service = Note::find($id);
            $service->desc = $req->service_desc;
            $service->title = $req->title;
            $service->data = $req->data;
            $service->save();
        }
        // update
        else if($id!=='0' && $req->hasFile('file')){
            $service = Note::find($id);
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
            $service = new Note;
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
        $service  = Note::all();
        return response()->json($service);
    }
    public function deleteEnglish($id){
        $service = Note::find($id);
        $service->delete();
        return back();
    }
    public function findEnglish($id){
        $service = Note::find($id);
        return response()->json($service);
    }
}
