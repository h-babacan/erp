<?php

namespace App\Http\Controllers;

use App\Models\Musteriler;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MusteriController extends Controller
{
    public function ekle()
    {
        return view('musteriler.ekle');
    }

    public function ekleme(Request $request)
    {

        $getir = Musteriler::where('telefon', $request->telefon)->first();
        if ($getir) {
            return redirect()->back()->with([
                'mesaj' => 'Bu telefon müşterisi başka müşteriye aittir.',
                'durum' => '0',
            ]);
        } else {
            $yeni_musteri = new Musteriler();
            $yeni_musteri->musteri_adsoyad = $request->musteri_adsoyad;
            $yeni_musteri->musteri_tipi = $request->musteri_tipi;
            $yeni_musteri->telefon = $request->telefon;
            $sonuc = $yeni_musteri->save();

            if ($sonuc) {
              return redirect('/musteriler/dataliste')->with([
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
        $data['musteriler'] = Musteriler::orderBy('id', 'desc')->get();
        $data['title'] = 'DataTable Müşteri Listesi';
        return view('musteriler.dataliste', $data);
    }

    public function listeyigetir(Request $request)
    {
        $tablo = Musteriler::query();
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

    public function duzenle($id = '0')
    {
        if ($id == '0') {
            return redirect()->back()->with([
                'mesaj' => 'Buraya Giriş Yetkiniz Yok.',
                'durum' => '0',
            ]);
        } else {
            $musteri = Musteriler::find($id);

            if ($musteri) {
                $data['musteri'] = $musteri;
                $data['title'] = 'Müşteri güncelle';
                return view('musteriler.guncelle', $data);
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
        $musteri = Musteriler::find($request->id);

        $musteri->musteri_adsoyad = $request->musteri_adsoyad;
        $musteri->telefon = $request->telefon;
        $musteri->dogum_tarihi = $request->dogum_tarihi;
        $musteri->musteri_tipi = $request->musteri_tipi;
        $musteri->cinsiyet = $request->cinsiyet;
        $musteri->adres = $request->adres;
        $musteri->email = $request->email;
        $musteri->tc = $request->tc;
        $musteri->vergi_dairesi = $request->vergi_dairesi;

        $sonuc = $musteri->save();
        if ($sonuc) {
            return redirect()->back()->with([
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
        $data['musteriler'] = Musteriler::orderBy('id', 'desc')->get();
        $data['title'] = 'Müşteri Listesi';
        return view('musteriler.liste', $data);
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

