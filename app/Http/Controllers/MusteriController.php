<?php

namespace App\Http\Controllers;

use App\Models\Musteriler;
use Illuminate\Http\Request;

class MusteriController extends Controller
{
    public function ekle(){
        return view('musteriler.ekle');
    }

    public function ekleme(Request $request){
        $getir=Musteriler::where('telefon',$request->telefon)->first();
        if ($getir) {
            return redirect()->back()->with([
                'mesaj' => 'Bu telefon numarası başka müşteriye aittir.',
                'durum' => '0',
            ]);
            //Aşağıdaki kodları if yerine yazdığımızda telefon numarasını sorgulayıp eğer yoksa veritabanına öyle ekleyecek.
            // Kodun düzgün çalışması için first() metodu ile çalıştırmamız gerekiyormuş.
            // -D
            /*

           $getir=Musteriler::where('telefon',$request->telefon);
              if ($getir){
              return redirect()->back()->with([
                'mesaj' => 'Bu telefon numarası başka müşteriye aittir.',
                'durum' => '0',
               ]);

             */
        }else{
            $yeni_musteri = new Musteriler();
            $yeni_musteri->musteri_adsoyad=$request->musteri_adsoyad;
            $yeni_musteri->musteri_tipi=$request->musteri_tipi;
            $yeni_musteri->telefon=$request->telefon;
            $sonuc=$yeni_musteri->save();
            if($sonuc){
                /*return redirect('/musteriler/liste')->back()->with([
                    'mesaj' => 'Kayıt eklendi.',
                    'durum' => '1',
                ]);*/
                return redirect('/musteriler/liste');

            }else{
                return redirect()->back()->with([
                    'mesaj' => 'Kayıt eklenemedi.',
                    'durum' => '0',
                ]);
            }
        }



    }


    public function listele(){
        $data['musteriler']=Musteriler::orderBy('id','desc')->get();
        $data['title']='Müşteri Listesi';
        return view('musteriler.liste',$data);
    }
}
