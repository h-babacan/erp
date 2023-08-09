<?php

namespace App\Http\Controllers;

use App\Models\Satinal;
use Illuminate\Http\Request;

class TakvimController extends Controller
{
    public function takvim(){
        return view('sidebarextensions.takvim');
    }

    public function getData()
    {
        $events = Satinal::all(); // Satinal tablosundaki tüm verileri çekiyoruz

        $data = [];
        foreach ($events as $event) {
            $data[] = [
                'title' => $event->konu, // konu sütunundaki değer etkinlik adı olarak kullanılıyor
                'start' => $event->tarih // tarih sütunundaki değer etkinlik başlangıç tarihi olarak kullanılıyor
            ];
        }
        return response()->json($data); // json formatında verileri view'e gönderiyoruz
    }
}
