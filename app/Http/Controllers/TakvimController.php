<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TakvimController extends Controller
{
    public function takvim(){
        return view('sidebarextensions.takvim');
    }
}