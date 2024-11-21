<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function roomdetails($id)
    {
$room= Room::find($id);
return view('home.roomdetails',compact('room'));
    }

    public function create(Request $request,$id)
    {
       $data= new Booking;
       $data->room_id=$id;
       $data->name=$request->name;  
       $data->email=$request->email;  
       $data->phone=$request->phone;  
       $data->startdate=$request->startdate;  
       $data->enddate=$request->enddate;  
       $data->save();
       
       return redirect()->back()->with('message','Room Booked Successfuly');

    }
}
