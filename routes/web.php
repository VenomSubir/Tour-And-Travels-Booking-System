<?php

use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\TourPakageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

//admin all routes
Route::get('/admin/logout' , [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile' , [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit' , [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store' , [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password' , [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('/admin/change/password/update' , [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');

// Admin Banner routes
Route::prefix('banner')->group(function (){
    Route::get('/view' , [BannerController::class, 'bannerView'])->name('all.banner');
    Route::post('/store' , [BannerController::class, 'bannerStore'])->name('banner.store');
    Route::get('/edit/{id}' , [BannerController::class, 'bannerEdit'])->name('banner.edit');
    Route::post('/update' , [BannerController::class, 'bannerUpdate'])->name('banner.update');
    Route::get('/delete/{id}' , [BannerController::class, 'bannerDelete'])->name('banner.delete');
});

// Admin tour_packageView routes
Route::prefix('tour_package')->group(function (){
    Route::get('/view' , [TourPakageController::class, 'tour_packageView'])->name('all.tour_package');
    Route::post('/store' , [TourPakageController::class, 'tour_packageStore'])->name('tour_package.store');
    Route::get('/edit/{id}' , [TourPakageController::class, 'tour_packageEdit'])->name('tour_package.edit');
    Route::post('/update' , [TourPakageController::class, 'tour_packageUpdate'])->name('tour_package.update');
    Route::get('/delete/{id}' , [TourPakageController::class, 'tour_packageDelete'])->name('tour_package.delete');
});

// Admin booked_packageView routes
Route::prefix('booked_packages')->group(function (){
    Route::get('/view' , [TourPakageController::class, 'booked_packageView'])->name('all.booked_packages');
    Route::get('/delete/{id}' , [TourPakageController::class, 'bookingDelete'])->name('booking.delete');
});


//frontend routes
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//index route
Route::get('/' , [IndexController::class, 'index'])->name('home');
// about route
Route::get('/about' , [IndexController::class, 'about']);
// typography route
Route::get('/tour_package' , [IndexController::class, 'tour_package']);
// contact route
Route::get('/contact' , [IndexController::class, 'contact']);

Route::get('/booking/{id}',[BookingController::class,'booking'])->name('user.booking');
Route::post('/booking',[BookingController::class,'bookingStore'])->name('booking.store');

