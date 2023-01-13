<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class landingpageController extends Controller
{
    public function index(){  
        $Events = event::all();
      
        return view('user.landingpage',compact('Events'));
    }

}
