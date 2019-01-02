<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Category;
use App\GalleryImage;
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
        return view('home');
    }

}
