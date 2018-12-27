<?php

namespace App\Http\Controllers;

use App\Category;
use App\TouristObject;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        initialDb();
        $list['list'] = TouristObject::with(['gallery','category'])->get()->toArray();
        foreach ($list['list'] as $keys =>  $rows){
            foreach ($rows['gallery'] as $row){
                $list['list'][$keys]['image_link'] =  Cloudder::secureShow($row['image_path'],["width" => 150, "height" => 100]);
            }
            $list['list'][$keys]['category'] = $rows['category']['category'];
        }


        return view('home',$list);
    }
}
