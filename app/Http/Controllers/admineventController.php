<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admineventController extends Controller
{
    public function index(){
        return view('admin.adminevent');
    }
}
