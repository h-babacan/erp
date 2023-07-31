<?php

namespace App\Http\Controllers;
use App\Models\Alinacakurunler;
use Illuminate\Http\Request;



class AlinacakUrunlerController extends Controller
{

    public function ekle(){
        return view('alinacakurunler.ekle');
    }
}
