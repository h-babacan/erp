<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function ekle(){
        return view('web.Web');
    }
    public function ekleme(Request $request)
    {

        $getir = Satinal::where('urun_kodu', $request->urun_kodu)->first();
        if ($getir) {
            return redirect()->back()->with([
                'mesaj' => 'Bu Ürün Zaten Listede Bulunuyor.',
                'durum' => '0',
            ]);
        } else {
            $yeni_urun = new Satinal();
            $yeni_urun->urun_adi = $request->urun_adi;
            $yeni_urun->urun_kodu = $request->urun_kodu;
            $yeni_urun->urun_tipi = $request->urun_tipi;
            $yeni_urun->maks_stok = $request->maks_stok;
            $yeni_urun->depo_miktar = $request->depo_miktar;
            $yeni_urun->min_stok = $request->min_stok;
            $yeni_urun->birim_fiyat = $request->birim_fiyat;
            $sonuc = $yeni_urun->save();

            if ($sonuc) {
                return redirect('/alinacakurunler/satinal')->with([
                    'mesaj' => 'Kayıt eklendi.',
                    'durum' => '1',]);
//                return redirect('/musteriler/dataliste
//                ');


            } else {
                return redirect()->back()->with([
                    'mesaj' => 'Kayıt eklenemedi.',
                    'durum' => '0',
                ]);
            }
        }


    }
    public function listeyigetir(Request $request)
    {
        $tablo = Satinal::query();
        $data = DataTables::of($tablo)
            ->addColumn('butonlar', function ($tablo) {
                return
                    '<a href="' . url('musteriler/duzenle', ['id' => $tablo->id]) . '" class="btn btn-sm btn-success">Düzenle</a>' .
                    '<a class="btn btn-sm btn-danger ml-1"  onclick=" sil(\'' . url('musteriler/sil', ['id' => $tablo->id]) . '\')">Sil</a>';
            })
            ->rawColumns(['butonlar'])
            ->make(true);
        return $data;
    }
    public function dataliste()
    {
        $data['satinal'] = Satinal::orderBy('id', 'desc')->get();

        return view('satinal.ekle', $data);
    }



}
