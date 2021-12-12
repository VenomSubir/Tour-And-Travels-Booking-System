<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class TourPakageController extends Controller
{
    public function tour_packageView(){
        $t_package = TourPackage::latest()->get();
        return view('backend.tour_package.tour_package_view',compact('t_package'));
    }

    public function tour_packageStore(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(800,600)->save('upload/backend/tour_package/'.$name_gen);
        $save_url = 'upload/backend/tour_package/'.$name_gen;

        TourPackage::insert([
            'name' => $request->name,
            'price' => $request->price,
            'rating' => $request->rating,
            'review' => $request->review,
            'description' => $request->description,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Package Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function tour_packageEdit($id){
        $t_package = TourPackage::findOrFail($id);
        return view('backend.tour_package.tour_package_edit',compact('t_package'));
    }

    public function tour_packageUpdate(Request $request){
        $package_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')){

            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(800,600)->save('upload/backend/tour_package/'.$name_gen);
            $save_url = 'upload/backend/tour_package/'.$name_gen;

            TourPackage::findOrFail($package_id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'rating' => $request->rating,
                'review' => $request->review,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Package Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('all.tour_package')->with($notification);

        }
        else{

            TourPackage::findOrFail($package_id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'rating' => $request->rating,
                'review' => $request->review,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => 'Package Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('all.tour_package')->with($notification);

        }
    }

    public function tour_packageDelete($id){

        $package = TourPackage::findOrFail($id);
        $img = $package->image;
        unlink($img);

        TourPackage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Package Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function booked_packageView(){
        $booked = DB::table('bookings')->get();
        return view('backend.booked_package',compact('booked'));
    }

    public function bookingDelete($id){
        Booking::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Booking Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
