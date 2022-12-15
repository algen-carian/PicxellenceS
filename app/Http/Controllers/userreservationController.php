<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userreservationController extends Controller
{
    public function index(){
        return view('user.userreservation');
    }
}
