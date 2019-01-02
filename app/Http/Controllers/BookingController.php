<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    //


    public function listBooking(Request $request,$id){
        $data['booking'] = Booking::where('status' ,$id)->get()->toArray();
        foreach ($data['booking'] as $key =>  $row){
            $data['booking'][$key]['hotel'] = Hotel::where('id',$row['hotel_id'])->first()->toArray();
        }
        $data['status']  = $id;
        if($request['type'] == 'ajax'){
            return response()->json($data);
        }
        return view('list_booking',$data);
    }

    public function viewDetailBooking(Request $request,$id){
        $data['booking'] = Booking::with(['hotel'])->where('id' ,$id)->get()->first()->toArray();
        $data['status'] = $data['booking']['status'];
        return view('admin.view_detail_booking',$data);
    }

    public function processBooking(Request $request,$id){
        $datas['booking'] = Booking::with(['hotel'])->where('id',$id)->get()->first();
        $datas['booking']->update(['status' => 1]);
        return redirect()->back()->with('message','booking has been sent to the hotel with email confirmation');
    }


    public function rejectBooking(Request $request,$id){
        $data['booking'] = Booking::find($id)->delete();
        return redirect()->back()->with('error','booking has been Reject  with email confirmation');
    }


    public function postBooking(Request $request){
        $today_dt = (new \DateTime())->format('Y-m-d H:i:s');
        $start_dt = (new \DateTime($request['start_date']))->format('Y-m-d H:i:s');
        $data = Hotel::find($request['hotel_id']);
        if($start_dt < $today_dt){
            return redirect()->back()->with('error', 'your date is not valid');
        }
        if ($data['room'] < $request['room_need']) {
            $booking = Booking::where('hotel_id', $request['hotel_id'])->orderBy('return_date', 'asc')->get();
            foreach ($booking as $row) {
                if ($row['room_need'] + $data['room'] >= $request['room_need']) {
                    return redirect()->back()->with('error', 'the room is full, make reservations above date' . $row['return_date']);
                }
            }
        }else{
            Booking::create($request->toArray());
            return redirect()->back()->with('success', 'Your request is being processed, we will send a response to your email');  ;

        }

    }


}
