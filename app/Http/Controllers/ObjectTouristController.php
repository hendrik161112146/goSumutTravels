<?php

namespace App\Http\Controllers;

use App\Category;
use App\GalleryImage;
use App\TouristObject;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class ObjectTouristController extends Controller
{
    //

    public function index (Request $request){
        initialDb();
        $list['list'] = TouristObject::with(['gallery','category'])->get()->toArray();
        foreach ($list['list'] as $keys =>  $rows){
            foreach ($rows['gallery'] as $row){
                $list['list'][$keys]['image_link'] =  Cloudder::secureShow($row['image_path'],["width" => 150, "height" => 100]);
            }
            $list['list'][$keys]['category'] = $rows['category']['category'];
        }
        return view('admin.object_tourist_list',$list);
    }

    public function addTouristObject(Request $request){
        if($request->method() == 'GET') {
            return view('admin.object_tourist_form');
        }else{
            $id = TouristObject::create($request->toArray())->id;
            return redirect()->route('add_upload_image_tourist',['id' => $id,'status' => 'object']);
        }
    }

    public function editTouristObject(Request $request,$id){


        if($request->method() == 'GET'){
            $object['data'] = TouristObject::find($id);
            $object['data']['gallery'] = $object['data']->gallery->toArray();
            foreach ($object['data']['gallery'] as $img){
                $image = Cloudder::show($img['image_path'], []);
                $object['data']['images'] = [Cloudder::secureShow($image, [])];
            }
            $object['data']['category'] = $object['data']->category->toArray();
            $object['data'] = $object['data']->toArray();
            $object['id'] = $id;


            return view('admin.object_tourist_form',$object);
        }else{
            $data = TouristObject::find($id)->update($request->toArray());
            return redirect()->back();
        }

    }

    public function deleteTouristObject(Request $request,$id)
    {
        $object = TouristObject::find($id);
        foreach ($object->gallery->toArray() as $key => $node){
            Cloudder::destroyImage($node['image_path'],null);
            Cloudder::delete($node['image_path'],null);
        }
        $object->gallery()->delete();
        $object->delete();
        return redirect()->back();
    }




}
