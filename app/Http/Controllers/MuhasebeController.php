<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuhasebeController extends Controller
{
    public function gelir(){
        return view('muhasebe.gelir');
    }

    public function gider(){
        return view('muhasebe.gider');
}
    public function kesim(){
        return view('muhasebe.kesim');
    }
    public function liste(){
        return view('muhasebe.liste');
    }
    public function maas(){
        return view('muhasebe.maas');
    }

    public function print(){
        return view('muhasebe.print');
    }




}

