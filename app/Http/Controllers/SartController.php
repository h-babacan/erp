<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SartController extends Controller
{
    public function sart(){
        return view('login_register.sartlar');
    }
}
