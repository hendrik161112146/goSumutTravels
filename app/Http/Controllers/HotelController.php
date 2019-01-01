<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class HotelController extends Controller
{
    //

    public function hotelList(Request $request){
        $data['hotel'] = Hotel::with(['gallery'])->get()->toArray();
        foreach ($data['hotel'] as $keys =>  $rows){
            if( !empty($rows['gallery'] ) ) {
                foreach ($rows['gallery'] as $row) {
                    $data['hotel'][$keys]['image_link'] =  Cloudder::secureShow($row['image_path'], ["width" => 150, "height" => 100]);
                }
            }else{
                $data['hotel'][$keys]['image_link'] = '';
            }
        }
        return view('admin.hotel_list',$data);
    }

    public function AddHotels(Request $request){
        if($request->method() == 'GET'){
            return View('admin.addhotelform');

        }else{
            $request['facilities'] = serialize($request['facilities']);
            $request['price'] = money_format('%i', $request['price']);
            $id = Hotel::create($request->toArray())->id;
            return redirect()->route('add_upload_image_tourist',['id' => $id,'status' => 'hotel']);
        }
    }

    public function Edithotel(Request $request,$id){
        if($request->method() == 'GET'){
            $data['hotel'] = Hotel::find($id);
            $data['id'] = $id;
            $data['hotel']['facilities'] = unserialize($data['hotel']['facilities']);

            return View('admin.addhotelform',$data);

        }else{
            $request['facilities'] = serialize($request['facilities']);
            $request['price'] = money_format('%i', $request['price']);
            $hotel = Hotel::find($id)->update($request->toArray());
            return redirect()->route('add_upload_image_tourist',['id' => $id,'status' => 'hotel']);
        }
    }

    public function Deletehotel(Request $request,$id){
        $hotel = Hotel::find($id);
        foreach ($hotel->gallery->toArray() as $key => $node){
            Cloudder::destroyImage($node['image_path'],null);
            Cloudder::delete($node['image_path'],null);
        }
        $hotel->gallery()->delete();
        $hotel->delete();
        return redirect()->back();
    }


    public function HotelDetail(Request $request,$id){
        $hotel = Hotel::with(['gallery'])->where('id',$id)->get()->toArray();
        $data['hotel'] = Hotel::with(['gallery'])->take(20)->get()->toArray();
        foreach ($hotel as $keys => $rows){
            $hotel[$keys]['facilities'] = unserialize($rows['facilities']);
            foreach ($rows['gallery'] as  $row) {
                $hotel[$keys]['image_link'][] =  Cloudder::secureShow($row['image_path'], ["width" => 300, "height" => 300]);
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
        $data['hotel'] = array_chunk($data['hotel'],3);
        $data['hotel_data'] = $hotel[count($hotel)-1];
        $data['id'] = $id;
        return view('hotel_detail',$data);
    }

    public function HotelListWeb(Request $request){
        $data['hotel'] = Hotel::with(['gallery'])->take(15)->get()->toArray();
        foreach ($data['hotel'] as $keys =>  $rows){
            $data['hotel'][$keys]['facilities'] = unserialize($rows['facilities']);
            if( !empty($rows['gallery'] ) ) {
                foreach ($rows['gallery'] as $row) {
                    $data['hotel'][$keys]['image_link'] =  Cloudder::secureShow($row['image_path'], ["width" => 300, "height" => 300]);
                }
            }else{
                $data['hotel'][$keys]['image_link'] = '';
            }
        }
        $data['hotel'] = array_chunk($data['hotel'],3);
        return view('hotel_list',$data);
    }
}
