<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SifrekurtarmaController extends Controller
{
    public function sifrekurtarma(){
        return view('login_register.sifrekurtarma');
    }
}
