<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\serviccontroller;
use App\Http\Controllers\viewservicecontroller;


use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\viewuserbookingcontroller;
use App\Http\Controllers\userlistcontroller;
use App\Http\Controllers\mybookingcontroller;

use App\Http\Controllers\staffcontroller;
use App\Http\Controllers\viewstaffcontoller;
use App\Http\Controllers\acceptcontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/customer', function () {
    return view('customer');
});
Route::get('/custlogin', function () {
    return view('custlogin');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});
Route::get('/adminhome', function () {
    return view('adminhome');
});

Route::get('/addservices', function () {
    return view('addservices');
});



Route::get('/viewallcustomers',[CustomerController::class,'index']);
Route::get('/signup',[CustomerController::class,'create']);

Route::post('/signup',[CustomerController::class,'store']);

Route::post('/custlogin',[CustomerController::class,'store']);

Route::post('/custlogin',[LoginController::class,'CustomerLog']); 

Route::post('/adminlogin',[LoginController::class,'AdminLog']); 
Route::post('/addservices',[serviccontroller::class,'InsertService']); 

Route::get('/addservices',[serviccontroller::class,'ViewService']);
Route::get('/addservices/{id}',[serviccontroller::class,'DeleteService']);
//----------------------------------......................................

Route::get('/ViewAllServices',[viewservicecontroller::class,'Data']);

Route::post('/ViewAllServices',[viewservicecontroller::class,'View']);
Route::get('/addrequest',[viewservicecontroller::class,'ViewData']);
//---------------------------------------------------------------------------
Route::post('/addrequest',[bookingcontroller::class,'ApptIns']);


Route::get('/ViewUserBooking',[viewuserbookingcontroller::class,'Viewbookingnew']);
Route::get('/AcceptedBooking',[acceptcontroller::class,'Viewbook']);


Route::get('/viewallcustomers',[userlistcontroller::class,'User']);

Route::get('/viewrequest',[mybookingcontroller::class,'Mybooking']);
Route::get('/viewrequestStatus',[mybookingcontroller::class,'MybookingStatus']);

Route::get('/addstaff', function () {
    return view('/addstaff');
});
Route::get('/addstaff',[staffcontroller::class,'serviceData']);
Route::post('/addstaff',[staffcontroller::class,'Insertstaff']);



Route::get('/viewstaff',[viewstaffcontoller::class,'ViewS']);

Route::get('/viewstaff/{id}',[viewstaffcontoller::class,'Delete']);
