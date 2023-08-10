<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Satinal;
use App\Models\Alinacakurunler;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SatinalController extends Controller
{
    public function ekle(){
        return view('satinal.ekle');
    }


    public function ekleme(Request $request)
    {
        $getir = Alinacakurunler::where('urun_kodu', $request->urun_kodu)->first();

        if ($getir) {
            // Item exists in "alınacak ürünler" list, so let's move it to "satın alınan ürünler" list.
            $yeni_urun = new Satinal();
            $yeni_urun->urun_adi = $request->urun_adi;
            $yeni_urun->urun_kodu = $request->urun_kodu;
            $yeni_urun->urun_tipi = $request->urun_tipi;
            $yeni_urun->maks_stok = $request->maks_stok;
            $yeni_urun->depo_miktar = $request->depo_miktar;
            $yeni_urun->min_stok = $request->min_stok;
            $yeni_urun->birim_fiyat = $request->birim_fiyat;
            $yeni_urun->alinacak_miktar = $request->alinacak_miktar;
            $yeni_urun->odenecek_tutar = $request->birim_fiyat * $request->alinacak_miktar;
            $yeni_urun->tarih = $request->datepicker; // Eklenen kısım
            $sonuc = $yeni_urun->save();




            if ($sonuc) {

                $yeni_events = new Event();
                $yeni_events->start= $request->datepicker;
                $yeni_events->end = $request->datepicker;
                $yeni_events->title = $request->urun_adi;
                $yeni_events->save();

                // If the item was successfully moved, delete it from the "alınacak ürünler" list.
                $getir->delete();
                return redirect('/alinacakurunler/satinal')->with([
                    'digerIslem' => true, // Bu değişkeni kullanarak Swal modalını tetikleyeceğiz
                    'mesaj' => 'Ürün Satın Alınanlar Listesine eklendi ve Eksik Ürünler listesinden silindi.',
                    'durum' => '1',
                ]);
            } else {
                return redirect()->back()->with([
                    'mesaj' => 'Kayıt eklenemedi.',
                    'durum' => '0',
                ]);
            }
        } else {
            return redirect()->back()->with([
                'mesaj' => 'Bu Ürün Zaten Listede Bulunuyor.',
                'durum' => '0',
            ]);
        }
    }

    public function listeyigetir(Request $request)
    {
        $tablo = Satinal::query();
        $data = DataTables::of($tablo)
            ->addColumn('butonlar', function ($tablo) {
                return
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
