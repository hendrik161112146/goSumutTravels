<?php

namespace App\Http\Controllers;

use App\GalleryImage;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class GalleryController extends Controller
{
    //

    public function GalleryList(Request $request){
        $data['gallery'] = GalleryImage::with(['object'])->get()->toArray();
        foreach ($data['gallery'] as $key => $row){
           $data['gallery'][$key]['image_path'] = Cloudder::secureShow($row['image_path'], ["width" => 300, "height" => 300]);
        }
        $data['gallery'] = array_chunk($data['gallery'],3);
        return view('gallery_list',$data);
    }
}
