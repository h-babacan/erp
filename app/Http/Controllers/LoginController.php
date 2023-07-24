<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function giris(){
        return view('login_register.login');
    }
}
