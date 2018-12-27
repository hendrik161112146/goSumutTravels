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
        return view('admin.object_tourist_form');
    }

    public function addTouristObject(Request $request){


        $id = TouristObject::create($request->toArray())->id;
        foreach ($request->file('images') as $image){
           $namefile = 'object_tourist/'.$request['category_id'].'/'.time().'_'.$id.'.'.$image->getClientOriginalExtension();
           GalleryImage::create(['image_path' => $namefile,'object_id' => $id]);
           Cloudder::upload($image,$namefile);
        }

        return redirect()->route('home');
    }

    public function editTouristObject(Request $request,$id){

        $object['data'] = TouristObject::find($id);
        $object['data']['gallery'] = $object['data']->gallery->toArray();
        $object['data']['category'] = $object['data']->category->toArray();
        $object['data'] = $object['data']->toArray();
        return view('admin.object_tourist_form',$object);
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
