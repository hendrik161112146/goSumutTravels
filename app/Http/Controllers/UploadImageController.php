<?php

namespace App\Http\Controllers;

use App\GalleryImage;
use App\Hotel;
use App\TouristObject;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class UploadImageController extends Controller
{
    //

    public function addUploadImageObject(Request $request,$id){
        if($request->method() == 'GET'){
            if($request['status'] == 'object') {
                $data = GalleryImage::where('object_id', $id)->get()->toArray();
                foreach ($data as $key => $row) {
                    Cloudder::show($row['image_path'], []);
                    $data[$key]['image_path'] = Cloudder::secureShow($row['image_path'], ['width' => 600, 'height' => 300]);
                }
                $datas['images'] = $data;
                $datas['id'] = $id;
                return view('admin.uploadImage', $datas);
            }else{
                $data = GalleryImage::where('hotel_id', $id)->get()->toArray();
                foreach ($data as $key => $row) {
                    Cloudder::show($row['image_path'], []);
                    $data[$key]['image_path'] = Cloudder::secureShow($row['image_path'], ['width' => 600, 'height' => 300]);
                }
                $datas['images'] = $data;
                $datas['id'] = $id;
                return view('admin.uploadImage', $datas);
            }
        }else{

            if($request['status'] == 'object') {
                //dd($request['status'] );
                $object = TouristObject::find($id);
                $image = $request->file('images');
                $namefile = 'object_tourist/' . $object['category_id'] . '/' . str_random(15) . '_' . $id . '.' . $image->getClientOriginalExtension();
                GalleryImage::create(['image_path' => $namefile, 'object_id' => $id]);
                Cloudder::upload($image, $namefile);
                return response()->json(['uploaded' => '/upload/' . $namefile]);
            }else{
               // dd($request['status'] );
                $hotel = Hotel::find($id);
                $image = $request->file('images');
                $namefile = 'hotel_and_resort/' . $hotel['property_type'] . '/' . str_random(15) . '_' . $id . '.' . $image->getClientOriginalExtension();
                GalleryImage::create(['image_path' => $namefile, 'hotel_id' => $id]);
                Cloudder::upload($image, $namefile);
                return response()->json(['uploaded' => '/upload/' . $namefile]);
            }
        }
    }

    public function deleteUploadImageObject(Request $request,$id){
        $gallery = GalleryImage::find($id);
        Cloudder::destroyImage($gallery['image_path'], null);
        Cloudder::delete($gallery['image_path'], null);
        $gallery->delete();
        return response()->json();
    }
}
