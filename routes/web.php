<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminloginController;
use App\Http\Controllers\admindashboardController;
use App\Http\Controllers\userdashboardController;
use App\Http\Controllers\userloginController;
use App\Http\Controllers\signupformController;
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



//USERLOGIN
Route::get('/', function () {
    return view('user.userlogin');
});

//ADMINLOGIN
Route::get('/adminlogin', function () {
    return view('admin.adminlogin');
});

//USERDASHBOARD
Route::get('/userdashboard', function () {
    return view('user.userdashboard');
});

//ADMINDASHBOARD
Route::get('/admindashboard', function () {
    return view('admin.admindashboard');
});

//SIGNUPFORM
Route::get('/signup', function () {
    return view('signup');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

//ADMINDASHBOARD
Route::get('/admindashboard',[admindashboardController::class, 'index']);

//USERDASHBOARD
Route::get('/userdashboard',[userdashboardController::class, 'index']);

//USERSIGNUPFORM
Route::get('/signupform',[signupformController::class, 'index']);
Route::post('/Registeracc',[signupformController::class, 'store']);


//ADMINLOGIN
Route::post('/adminAuth',[adminloginController::class, 'store']);

//USERLOGIN
Route::post('/userAuth',[userloginController::class, 'store']);


