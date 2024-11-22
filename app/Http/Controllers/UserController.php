<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Gallary;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index ()
    {
if(Auth::id())
{
$usertype =Auth()->user()->usertype;

if($usertype == 'user')
{
    $room=Room::all();

    $gallary = Gallary::all();

    return view('home.index',compact('room','gallary'));
}
 else if($usertype == 'admin')
{
    return view('admin.index');
}
else 
{
return redirect()->back();
}

}
    }

    public function home()
    { 
        $room=Room::all();
        $gallary= Gallary::all();
        return view('home.index',compact('room','gallary'));
 
    }

    public function createroom(){
        return view('admin.createroom');
    }
    public function room(){
        return view('admin.index');
    }
    public function addroom(Request $request)
    {
$data =new Room();  
$data->room_title = $request->title; 
$data->description = $request->description ; 
$data->price = $request->price; 
$data->room_type = $request->type; 
$image=$request->image;
if($image)
{
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('room',$imagename);
    $data->image=$imagename; 
}

$data->save();

return redirect()->back();

    }
    public function showroom()
    {
        $data = Room::all();
        return view('admin.showroom',compact('data')); 
    }
    public function destroy($id)
    {
        //
        $data = Room::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function uproom($id)
    {
        $data=Room::find($id);
        return view('admin.uproom',compact('data'));
    }
    public function editroom(Request $request, $id)
    {
       $data=Room::find($id);

       $data->room_title = $request->title; 
       $data->description = $request->description ; 
       $data->price = $request->price; 
       $data->room_type = $request->type;

       $image=$request->image;
       if($image)
       {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('room',$imagename);
        $data->image=$imagename;  
       }
       
       $data->save();

       return redirect()->back();
        
    }
    public function  bookings(){
        $data=Booking::all();
        return view('admin.booking',compact('data'));
    }

public function deletebooking($id)
{
    $data = Booking::find($id);
    $data->delete();
    return redirect()->back();
}

public function view_gallary()
{
    $gallary=Gallary::all();
    return view('admin.gallary',compact('gallary'));
}
 
 public function upload(Request $request)
 {
$data = new Gallary;
$image = $request->image;
if($image)
{
    $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->image->move('galla',$imagename);
    $data->image = $imagename;
    $data->save();
    return redirect()->back();
}
 }
 public function deleteGallary($id)
 {
$data = Gallary::find($id);
$data->delete();
return redirect()->back();

 }

}
