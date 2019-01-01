<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Hotel;
use Illuminate\Http\Request;
class BookingController extends Controller
{
    //
    public function postBooking(Request $request){
        $data = Hotel::find($request['hotel_id']);

       dd('asd');
        if($data['room'] < $request['room_need']){
            $booking = Booking::where('hotel_id',$request['hotel_id'])->whereDate('return_date','<', date($request['return_date']))->get();

            foreach ($booking as $row){
                $total = $data['room']+$row['room_need'];
                if($total >= $request['room_need']){
                    return redirect()->back()->with('error', 'room exist in'.$row['return_date']);
                }
            }
            return redirect()->back()->with('error', 'Hotel is full in this range date');
        }else{

        }
        Booking::create($request->toArray());
        return redirect()->back()->with('success', 'Your request is being processed, we will send a response to your email');  ;
    }
}
