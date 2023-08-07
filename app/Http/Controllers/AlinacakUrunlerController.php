<?php

namespace App\Http\Controllers;
use App\Models\Alinacakurunler;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class AlinacakUrunlerController extends Controller
{

    public function ekle(){
        return view('alinacakurunler.ekle');
    }
    public function ekleme(Request $request)
    {

        $getir = Alinacakurunler::where('urun_kodu', $request->urun_kodu)->first();
        if ($getir) {
            return redirect()->back()->with([
                'mesaj' => 'Bu Ürün Zaten Listede Bulunuyor.',
                'durum' => '0',
            ]);
        } else {
            $yeni_urun = new Alinacakurunler();
            $yeni_urun->urun_adi = $request->urun_adi;
            $yeni_urun->urun_kodu = $request->urun_kodu;
            $yeni_urun->urun_tipi = $request->urun_tipi;
            $yeni_urun->maks_stok = $request->maks_stok;
            $yeni_urun->depo_miktar = $request->depo_miktar;
            $yeni_urun->min_stok = $request->min_stok;
            $yeni_urun->birim_fiyat = $request->birim_fiyat;
            $yeni_urun->alinacak_miktar = $request->maks_stok - $request->depo_miktar;
//            $yeni_urun->odenecek_tutar = $request->alinacak_miktar - $request->birim_fiyat;
            $sonuc = $yeni_urun->save();

            if ($sonuc) {
               return redirect('/alinacakurunler/liste')->with([
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

    public function dataliste()
    {
        $data['alinacakurunler'] = Alinacakurunler::orderBy('id', 'desc')->get();
        $data['title'] = 'DataTable Eksik Ürünler Listesi';
        return view('alinacakurunler.liste', $data);
    }

    public function listeyigetir(Request $request)
    {
        $tablo = Alinacakurunler::query();
        $data = DataTables::of($tablo)
            ->addColumn('butonlar', function ($tablo) {
                return
                    '<a onclick=" satinal(\'' . url('alinacakurunler/duzenle', ['id' => $tablo->id]) . '\')"class="btn btn-sm btn-success">Satın Al</a>';
            })
            ->rawColumns(['butonlar'])
            ->make(true);
        return $data;
    }

    public function duzenle($id = '0')
    {
        if ($id == '0') {
            return redirect()->back()->with([
                'mesaj' => 'Buraya Giriş Yetkiniz Yok.',
                'durum' => '0',
            ]);
        } else {
            $urun = Alinacakurunler::find($id);

            if ($urun) {
                $data['urun'] = $urun;
                return view('alinacakurunler.guncelle', $data);
            } else {
                return redirect()->back()->with([
                    'mesaj' => 'Kayıt bulunamadı.',
                    'durum' => '0',
                ]);
            }
        }
    }

    public function guncelleme(Request $request)
    {
        $urun = Alinacakurunler::find($request->id);
//
//        $urun->urun_adi = $request->urun_adi;
//        $urun->urun_kodu = $request->urun_kodu;
//        $urun->urun_tipi = $request->urun_tipi;
//        $urun->maks_stok = $request->maks_stok;
//        $urun->depo_miktar = $request->depo_miktar;
//        $urun->min_stok = $request->min_stok;
//        $urun->birim_fiyat = $request->birim_fiyat;
//        $urun->alinacak_miktar = $request->maks_stok - $request->depo_miktar;
//        $urun->odenecek_tutar = $request->alinacak_miktar - $request->birim_fiyat;


        $sonuc = $urun->save();
        if ($sonuc) {
            return redirect('alinacakurunler/siparisekle')->with([
                'mesaj' => 'Kayıt Güncellendi.',
                'durum' => '1',
            ]);
        } else {
            return redirect()->back()->with([
                'mesaj' => 'Kayıt Güncellenemedi.',
                'durum' => '0',
            ]);
        }


    }


    public function listele()
    {
        $data['alinacakurunler'] = Alinacakurunler::orderBy('id', 'desc')->get();
        $data['title'] = 'Müşteri Listesi';
        return view('alinacakurunler.liste', $data);
    }

    public function listedata(Request $request)
    {
        $tablo = Musteriler::query();
        $data = DataTables::of($tablo)
            ->addColumn('duzenle', function ($tablo) {
                return '<a class="btn btn-sm btn-success" href="' . url('musteriler/duzenle', ['id' => $tablo->id]) . '">Düzenle</a>';
            })
            ->addColumn('sil', function ($tablo) {
                return '<a class="btn btn-sm btn-danger" href="' . url('musteriler/sil', ['id' => $tablo->id]) . '">Sil</a>';
            })
            ->rawColumns(['duzenle', 'sil'])
            ->make(true);
        return $data;
    }

    public function silme($id)
    {
        $data = Musteriler::findOrFail($id)->delete();


        if ($data) {
            return redirect()->back()->with([
                'mesaj' => 'Kayıt Silindi.',
                'durum' => '1',
            ]);
        } else {
            return redirect()->back()->with([
                'mesaj' => 'Kayıt Silinirken Bir Hata Oluştu.',
                'durum' => '0',
            ]);
        }

    }

}
