<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $booking = Booking::All();
        return view('booking.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required|string|max: 255',
            'email'=>'required|string|max: 255',
            'phone'=>'required|boolean',
             'type'=>'required|string|max: 255',
            'nroom'=>'required|boolean',
              'ndays'=>'required|date'
            
        ]);
        Booking::create($request->all());
        return redirect()->route('booking.index')->with('success','booking was successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
        return view('booking.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
        return view('booking.edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
       $request->validate([
      'name'=>'required|string|max: 255',
            'email'=>'required|string|max: 255',
            'phone'=>'required|boolean',
             'type'=>'required|string|max: 255',
            'nroom'=>'required|boolean',
            'ndays'=>'required|date'
       ]);
       $booking->update($request->all());
       return redirect()->route('booking.index')->with('success','Booking  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();
        return redirect()->route('booking.index')->with('success','booked room deleted successfully');
    }
}
