<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index (Request $request){
        return view('content');
    }

    public function HomeList(Request $request){

        dd($request);
        //return view('');
    }
}
