<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class ObjectTouristController extends Controller
{
    //

    public function index (Request $request){
        return view('admin.object_tourist_form');
    }

    public function addTouristObject(Request $request){
   /*     dd($request->file('images')[0]);*/
        $image_name = $request->file('images')[0]->getRealPath();;

        $data = Cloudder::upload($image_name, null);
        dd($data);
        return redirect()->back()->with('status', 'Image Uploaded Successfully');
        dd($request->toArray());
    }
}
