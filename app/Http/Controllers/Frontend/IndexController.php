<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $banner = DB::table('banners')->get();
        $hot_tour = DB::table('tour_packages')->where('rating',5)->get();
        return view('frontend.index',compact('banner','hot_tour'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function tour_package(){
        $hot_tour = DB::table('tour_packages')->where('rating',5)->get();
        $tours = DB::table('tour_packages')->get();
        return view('frontend.tour_package',compact('hot_tour','tours'));
    }
    public function contact(){
        return view('frontend.contact');
    }
}
