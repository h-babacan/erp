<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public function deneme1(){
        return view('denemeicin.denemesayfa1');
    }
}
