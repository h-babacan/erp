<?php

namespace App\Http\Controllers;
use App\Models\Siparisal;
use Illuminate\Http\Request;

class SiparisalController extends Controller
{

    public function ekle(){
        return view('siparisal.ekle');

    }
    public function ekleme(Request $request)
    {

        $getir = Siparisler::where('telefon', $request->telefon)->first();
        if ($getir) {
            return redirect()->back()->with([
                'mesaj' => 'Bu telefon müşterisi başka müşteriye aittir.',
                'durum' => '0',
            ]);
        } else {
            $yeni_siparis = new Siparisler();
            $yeni_siparis->urun_adi = $request->urun_adi;
            $yeni_siparis->urun_kategorisi = $request->urun_kategorisi;
            $yeni_siparis->urun_adedi = $request->urun_adedi;
            $sonuc = $yeni_siparis->save();

            if ($sonuc) {
//                return redirect('/musteriler/liste')->back()->with([
//                    'mesaj' => 'Kayıt eklendi.',
//                    'durum' => '1',]);
                return redirect('/musteriler/dataliste7
                ');


            } else {
                return redirect()->back()->with([
                    'mesaj' => 'Kayıt eklenemedi.',
                    'durum' => '0',
                ]);
            }
        }


    }
    public function liste(){
        return view('siparisal.liste');
    }


}
