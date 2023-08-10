<?php

namespace App\Http\Controllers;

use App\Models\Muhasebe;
use App\Models\Onizle;
use App\Models\Yazdir;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MuhasebeController extends Controller
{
    public function gelir()
    {
        return view('muhasebe.gelir');

    }

    public function gelirekle(Request $request)
    {

        $getir = Muhasebe::where('telefon', $request->telefon)->first();
        if ($getir) {
            return redirect()->back()->with([
                'mesaj' => 'Bu telefon numarası başka müşteriye aittir.',
                'durum' => '0',
            ]);
        } else {
            $yeni_gelir = new Muhasebe();
            $yeni_gelir->musteri_adsoyad = $request->musteri_adsoyad;
            $yeni_gelir->telefon = $request->telefon;
            $yeni_gelir->musteri_tipi = $request->musteri_tipi;
            $yeni_gelir->fatura_tipi = $request->fatura_tipi;

            $yeni_gelir->urun = $request->urun;
            $yeni_gelir->adet = $request->adet;
            $yeni_gelir->birim_fiyat = $request->birim_fiyat;
            $yeni_gelir->kdv = $request->kdv;
            $yeni_gelir->vergi = $request->vergi;
            $yeni_gelir->vergi_dairesi = $request->vergi_dairesi;
            $yeni_gelir->email = $request->email;
            $yeni_gelir->adres = $request->adres;
            $yeni_gelir->fatura_tarihi = $request->fatura_tarihi;
            $yeni_gelir->odeme_tarihi = $request->odeme_tarihi;


            $sonuc = $yeni_gelir->save();

            if ($sonuc) {
                return redirect('/muhasebe/gelir');
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
        $data['onizle'] = Muhasebe::orderBy('id', 'desc')->get();
        $data['title'] = 'DataTable Fatura Listesi';
        return view('muhasebe.gelir', $data);
    }

    public function listeyigetir(Request $request)
    {
        $tablo = Muhasebe::query();
        $data = DataTables::of($tablo)
            ->addColumn('butonlar', function ($tablo) {
                return
                    '<a href="' . url('muhasebe/duzenle', ['id' => $tablo->id]) . '" class="btn btn-sm btn-success">Düzenle</a>' .
                    '<a class="btn btn-sm btn-danger ml-1"  onclick=" sil(\'' . url('muhasebe/sil', ['id' => $tablo->id]) . '\')">Sil</a>' .
                    '<a class="btn btn-info btn-md" data-toggle="modal">Önizle/Yazdır</a>
';


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
            $muhasebe = Muhasebe::find($id);

            if ($muhasebe) {
                $data['muhasebe'] = $muhasebe;
                $data['title'] = 'Fatura güncelle';
                return view('muhasebe.guncelleme', $data);
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
        $muhasebe = Muhasebe::find($request->id);


        $muhasebe->musteri_adsoyad = $request->musteri_adsoyad;
        $muhasebe->telefon = $request->telefon;
        $muhasebe->musteri_tipi = $request->musteri_tipi;
        $muhasebe->fatura_tipi = $request->fatura_tipi;
        $muhasebe->urun = $request->urun;
        $muhasebe->adet = $request->adet;
        $muhasebe->birim_fiyat = $request->birim_fiyat;
        $muhasebe->kdv = $request->kdv;
        $muhasebe->vergi = $request->vergi;
        $muhasebe->vergi_dairesi = $request->vergi_dairesi;
        $muhasebe->email = $request->email;
        $muhasebe->adres = $request->adres;
        $muhasebe->fatura_tarihi = $request->fatura_tarihi;
        $muhasebe->odeme_tarihi = $request->odeme_tarihi;

        $sonuc = $muhasebe->save();
        if ($sonuc) {
            return redirect(url('/muhasebe/gelir'))->with([
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

    public function silme($id)
    {
        $data = Muhasebe::findOrFail($id)->delete();


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



        public function onizle($id = '0')
        {
            if ($id == '0') {
                return redirect()->back()->with([
                    'mesaj' => 'Buraya Giriş Yetkiniz Yok.',
                    'durum' => '0',
                ]);
            } else {
                $muhasebe = Muhasebe::find($id);

                if ($muhasebe) {
                    $data['muhasebe'] = $muhasebe;
                    $data['title'] = 'Fatura güncelle';
                    return view('muhasebe.onizle', $data);
                } else {
                    return redirect()->back()->with([
                        'mesaj' => 'Kayıt bulunamadı.',
                        'durum' => '0',
                    ]);
                }
            }
        }

    public function printer($id = '0')
    {
        if ($id == '0') {
            return redirect()->back()->with([
                'mesaj' => 'Buraya Giriş Yetkiniz Yok.',
                'durum' => '0',
            ]);
        } else {
            $muhasebe = Muhasebe::find($id);

            if ($muhasebe) {
                $data['muhasebe'] = $muhasebe;
                $data['title'] = 'Fatura güncelle';
                return view('muhasebe.print', $data);
            } else {
                return redirect()->back()->with([
                    'mesaj' => 'Kayıt bulunamadı.',
                    'durum' => '0',
                ]);
            }
        }
    }

    public function listeyap()
    {
        $data['onizle'] = Muhasebe::orderBy('id', 'desc')->get();
        $data['title'] = 'Fatura Listesi';
        return view('muhasebe.gelir', $data);
    }


    public function gider()
    {
        $data['onizle'] = Muhasebe::orderBy('id', 'desc')->get();
        $data['kesim'] = 'dfg';
        return view('muhasebe.gider', $data);
    }

    public function kesim()
    {

        return view('muhasebe.kesim');
    }

    public function liste()
    {
        return view('muhasebe.liste');
    }

    public function maas()
    {
        return view('muhasebe.maas');
    }

    public function print()
    {
        return view('muhasebe.print');
    }


    public function ekle()
    {
        return view('muhasebe.gider');
    }

    public function datagelir(Request $request)
    {
        $tablo = Muhasebe::query();
        $data = DataTables::of($tablo)
            ->addColumn('duzenle', function ($tablo) {
                return '<a class="btn btn-sm btn-success" href="' . url('muhasebe/duzenle', ['id' => $tablo->id]) . '">Düzenle</a>';
            })

            ->addColumn('sil', function ($tablo) {
                return '<a class="btn btn-sm btn-danger ml-1"  onclick=" silme(\'' . url('muhasebe/sil', ['id' => $tablo->id]) . '\')"><i class="fa-solid fa-trash-can" style="color: #ffffff;"></i></a>';
            })

            ->addColumn('onizle', function ($tablo) {
                return '<a class="btn btn-sm btn-info" href="' . url('muhasebe/onizle', ['id' => $tablo->id]) . '">Önizle / Yazdır</a>';

            })
            ->rawColumns(['duzenle', 'sil', 'onizle'])
            ->make(true);
        return $data;
    }

    public function silsa($id)
    {
        $data = Muhasebe::findOrFail($id)->delete();


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


//    public function yonlen{
//        return view(muhasebe.düzenle)
//    }

    public function listele()
    {
        $data['onizle'] = Onizle::orderBy('id', 'desc')->get();
        $data['title'] = 'Deneme';
        return view('muhasebe.liste',$data);
}
}
