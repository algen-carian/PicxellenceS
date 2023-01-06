<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\r_event;

class admindashboardController extends Controller
{
    public function index(){
        $Wedding = r_event::select("*")->where("Service","Wedding")->count();
        $Birthday = r_event::select("*")->where("Service","Birthday")->count();
        $Debut = r_event::select("*")->where("Service","Debut")->count();
        $Christening = r_event::select("*")->where("Service","Christening")->count();
        $data = [ $Wedding, $Birthday, $Debut, $Christening];
       
        return view('admin.admindashboard',compact('data'));
    }
}
