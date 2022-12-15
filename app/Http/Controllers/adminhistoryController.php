<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminhistoryController extends Controller
{
    public function index(){
        return view('admin.adminhistory');
    }
}
