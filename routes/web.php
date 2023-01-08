<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminloginController;
use App\Http\Controllers\admindashboardController;
use App\Http\Controllers\adminhistoryController;
use App\Http\Controllers\admininventoryController;
use App\Http\Controllers\adminprofileController;
use App\Http\Controllers\adminaboutController;
use App\Http\Controllers\admineventController;


use App\Http\Controllers\userdashboardController;
use App\Http\Controllers\userloginController;
use App\Http\Controllers\signupformController;
use App\Http\Controllers\userreservationController;
use App\Http\Controllers\userprofileController;
use App\Http\Controllers\usereventController;
use App\Http\Controllers\useraboutController;
use App\Http\Controllers\landingpageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });




//ADMINLOGIN
Route::get('/adminlogin', function () {
    return view('admin.adminlogin');
});
//ADMINDASHBOARD
Route::get('/admindashboard', function () {
    return view('admin.admindashboard');
});
//ADMINHISTORY
// Route::get('/adminhistory', function () {
//     return view('admin.adminhistory');
// });
//ADMINABOUT
Route::get('/adminabout', function () {
    return view('admin.adminabout');
});
//ADMININVENTORY
Route::get('/admininventory', function () {
    return view('admin.admininventory');
});
//ADMINPROFILE
Route::get('/adminprofile', function () {
    return view('admin.adminprofile');
});
//ADMINEVENT
Route::get('/adminevent',[admineventController::class, 'index']);




//USERLOGIN
Route::get('/userlogin', function () {
    return view('user.userlogin');
});

//SIGNUPFORM
Route::get('/signup', function () {
    return view('signup');
});

//USERDASHBOARD
Route::get('/userdashboard', function () {
    return view('user.userdashboard');
});
//USERRESERVATION
Route::get('/userreservation', function () {
    return view('user.userreservation');
});
//USERPROFILE
Route::get('/userprofile', function () {
    return view('user.userprofile');
});
//USEREVENT
Route::get('/userevent', function () {
    return view('user.userevent');
});
//USERABOUT
Route::get('/userabout', function () {
    return view('user.userabout');
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

//ADMINLOGIN
Route::post('/adminAuth',[adminloginController::class, 'store']);
//ADMINDASHBOARD
Route::get('/admindashboard',[admindashboardController::class, 'index']);
//ADMINHISTORY
Route::get('/adminhistory',[adminhistoryController::class, 'index']);
//ADMININVENTORY
Route::get('/Reservation',[admininventoryController::class, 'index']);
//ADMINPROFILE
Route::get('/adminprofile',[adminprofileController::class, 'index']);
//ADMINABOUT
Route::get('/adminabout',[adminaboutController::class, 'index']);


//USERSIGNUPFORM
Route::get('/signupform',[signupformController::class, 'index']);
Route::post('/Register',[signupformController::class, 'store'])->name("Register");


//USERDASHBOARD
Route::get('/userdashboard',[userdashboardController::class, 'index']);
//USERLOGIN
Route::post('/userAuth',[userloginController::class, 'store']);
//USERRESERVATION
Route::post('/userreservation',[userreservationController::class, 'index']);
//USERPROFILE
Route::post('/userprofile',[userprofileController::class, 'index']);
//USEREVENT
Route::post('/userevent',[usereventController::class, 'index']);
//USERABOUT
Route::post('/userabout',[useraboutController::class, 'index']);
//NEW CODE
Route::post('/userlogin', [userloginController::class,'login'])->name('userlogin');

Route::post('/reserve', [userreservationController::class,'reserve'])->name('reserve');
Route::get('/updateStatus/{id}', [userreservationController::class,'updateStatus'])->name('updateStatus');
Route::get('/updateCancel/{id}', [userreservationController::class,'updateCancel'])->name('updateCancel');
Route::get('/viewEvent/{id}', [userreservationController::class,'viewEvent'])->name('viewEvent');
Route::post('/addEvent', [userreservationController::class,'addEvent'])->name('addEvent');
Route::get('/', [landingpageController::class,'index']);
