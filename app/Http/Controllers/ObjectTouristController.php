<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectTouristController extends Controller
{
    //

    public function index (Request $request){
        return view('admin.object_tourist_form');
    }

    public function addTouristObject(Request $request){
        dd($request->toArray());
    }
}
