<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function bannerView(){
        $banners = Banner::latest()->get();
        return view('backend.banner.banner_view',compact('banners'));
    }

    public function bannerStore(Request $request){
        $request->validate([
            'banner_title' => 'required',
            'banner_title_heading_h1' => 'required',
            'banner_title_heading' => 'required',
            'banner_image' => 'required',
        ]);

        $image = $request->file('banner_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save('upload/backend/banner/'.$name_gen);
        $save_url = 'upload/backend/banner/'.$name_gen;

        Banner::insert([
            'banner_title' => $request->banner_title,
            'banner_title_heading_h1' => $request->banner_title_heading_h1,
            'banner_title_heading' => $request->banner_title_heading,
            'banner_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Banner Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function bannerEdit($id){
        $banner = Banner::findOrFail($id);
        return view('backend.banner.banner_edit',compact('banner'));
    }

    public function bannerUpdate(Request $request){
        $banner_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('banner_image')){

            unlink($old_img);
            $image = $request->file('banner_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/backend/banner/'.$name_gen);
            $save_url = 'upload/backend/banner/'.$name_gen;

            Banner::findOrFail($banner_id)->update([
                'banner_title' => $request->banner_title,
                'banner_title_heading_h1' => $request->banner_title_heading_h1,
                'banner_title_heading' => $request->banner_title_heading,
                'banner_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Banner Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('all.banner')->with($notification);

        }
        else{

            Banner::findOrFail($banner_id)->update([
                'banner_title' => $request->banner_title,
                'banner_title_heading_h1' => $request->banner_title_heading_h1,
                'banner_title_heading' => $request->banner_title_heading,
            ]);

            $notification = array(
                'message' => 'Banner Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('all.banner')->with($notification);

        }
    }

    public function bannerDelete($id){

        $banner = Banner::findOrFail($id);
        $img = $banner->banner_image;
        unlink($img);

        Banner::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Banner Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
