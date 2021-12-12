<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function booking($id){
        $package = TourPackage::findOrFail($id);
        return view('frontend.booking',compact('package'));
    }

    public function bookingStore(Request $request){
        Booking::insert([
            'p_name' => $request->p_name,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        $notification = array(
            'message' => 'Package Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('home')->with($notification);
    }
}
