<?php

namespace App\Http\Controllers;

use App\GalleryImage;
use App\Hotel;
use App\TouristObject;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class HomepageController extends Controller
{
    //
    public function index (Request $request){
        $data['object'] = TouristObject::with(['gallery'])->where('category_id',1)->take(10)->get()->toArray();
        $data['hotel'] = Hotel::with(['gallery'])->take(20)->take(10)->get()->toArray();
        foreach ($data['object'] as $keys =>  $rows){
            if( !empty($rows['gallery'] ) ) {
                foreach ($rows['gallery'] as $row) {
                    $data['object'][$keys]['image_link'] =  Cloudder::secureShow($row['image_path'], ["width" => 300, "height" => 300]);
                }
            }else{
                $data['object'][$keys]['image_link'] = '';
            }
        }
        foreach ($data['hotel'] as $keys =>  $rows){
            if( !empty($rows['gallery'] ) ) {
                foreach ($rows['gallery'] as $row) {
                    $data['hotel'][$keys]['image_link'] =  Cloudder::secureShow($row['image_path'], ["width" => 300, "height" => 300]);
                }
            }else{
                $data['hotel'][$keys]['image_link'] = '';
            }
        }
        $data['object'] =  array_chunk($data['object'],3);
        $data['hotel'] = array_chunk($data['hotel'],3);
        $image = GalleryImage::with(['object'])->where('hotel_id',null)->take(20)->get()->toArray();
        foreach ($image as $key => $item){
            $image[$key]['image_path'] = Cloudder::secureShow($item['image_path'],["width" => 300, "height" => 300]);
        }
        $data['gallery'] = array_chunk($image , 6);
        return view('content',$data);
    }

    public function ObjectSpec(Request $request,$category){

        $data['object'] =TouristObject::with(['gallery'])->where('category_id',$category)->take(20)->get()->toArray();
        foreach ($data['object'] as $keys =>  $rows){
            if( !empty($rows['gallery'] ) ) {
                foreach ($rows['gallery'] as $row) {
                    $data['object'][$keys]['image_link'] =  Cloudder::secureShow($row['image_path'], ["width" => 300, "height" => 300]);
                }
            }else{
                $data['object'][$keys]['image_link'] = '';
            }
        }
        $data['object'] = array_chunk($data['object'] , 3);
        $data['category_id'] = $category;
        return view('homepage_list',$data);
    }

    public function ObjectDetail(Request $request,$id){

        $datas =TouristObject::with(['gallery'])->where('id',$id)->get()->toArray();
        $data['hotel'] = Hotel::with(['gallery'])->take(20)->take(10)->get()->toArray();
        foreach ($datas as $keys =>  $rows){
            if( !empty($rows['gallery'] ) ) {
                foreach ($rows['gallery'] as $row) {
                    $datas[$keys]['image_link'][] =  Cloudder::secureShow($row['image_path'], ["width" => 300, "height" => 300]);
                }
            }else{
                $datas[$keys]['image_link'] = [];
            }
        }
        foreach ($data['hotel'] as $keys =>  $rows){
            if( !empty($rows['gallery'] ) ) {
                foreach ($rows['gallery'] as $row) {
                    $data['hotel'][$keys]['image_link'] =  Cloudder::secureShow($row['image_path'], ["width" => 300, "height" => 300]);
                }
            }else{
                $data['hotel'][$keys]['image_link'] = '';
            }
        }
        $data['object']  = $datas[0];
        $data['hotel'] = array_chunk($data['hotel'],3);
        return view('object_detail',$data);
    }

}
