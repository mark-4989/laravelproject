<?php

namespace App\Http\Controllers;

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
    return view('user.userhome');
}
 else if($usertype == 'admin')
{
    return view('dashboard');
}
else 
{
return redirect()->back();
}

}
    }
}
