<?php

namespace App\Http\Controllers;

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
}
