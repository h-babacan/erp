<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tedarikciler;
use Yajra\DataTables\Facades\DataTables;
use Validator;

class TedarikciController extends Controller
{
    public function ekle()
    {
       return view('tedarikciler.ekle');
    }
    public function ekleme(Request $request)
    {
       $rules = array(
            'tedarikci_adsoyad'  => 'required',
            'telefon' => 'required',
        );
       $messages=array(
           'tedarikci_adsoyad.required' => 'Lütfen tedarikçinin ismini giriniz.',
           'tedarikci_adsoyad.unique' => 'Tedarikçi ismi zaten kayıtlı!',
           'telefon.unique' => 'Bu telefon numarası başka bir tedarikçiye aittir.',

/       );
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
        {
            $messages=$validator->messages();
            return response()->json(["messages"=>$messages], 500);
        }

        $getir = Tedarikciler::where('telefon', $request->telefon)->first();
        if ($getir) {
            return redirect()->back()->with([
                'mesaj' => 'Bu telefon numarası başka bir tedarikçiye aittir.',
                'durum' => '0',
            ]);
        } else {
            $yeni_tedarikci = new Tedarikciler();
            $yeni_tedarikci->tedarikci_adsoyad = $request->tedarikci_adsoyad;
            $yeni_tedarikci->telefon = $request->telefon;
            $yeni_tedarikci->tedarikci_tipi = $request->tedarikci_tipi;
            $sonuc = $yeni_tedarikci->save();

            if ($sonuc) {
               return redirect('/tedarikci/ekle')->with([
                   'mesaj' => 'Kayıt eklendi.',
                   'durum' => '1',]);
//                return redirect('/tedarikci/ekle
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
        $data['tedarikciler'] = Tedarikciler::orderBy('id', 'desc')->get();
        $data['title'] = 'DataTable Tedarikçi Listesi';
        return view('tedarikciler.ekle', $data);
    }

    public function listele()
    {
        $data['tedarikciler'] = Tedarikciler::orderBy('id', 'desc')->get();
        $data['title'] = 'Tedarikçi Listesi';
        return view('tedarikciler.liste', $data);
    }
    public function listeyigetir(Request $request)
    {
        $tablo = Tedarikciler::query();
        $data = DataTables::of($tablo)
            ->addColumn('butonlar', function ($tablo) {
                return
                    '<a href="' . url('tedarikci/duzenle', ['id' => $tablo->id]) . '" class="btn btn-sm btn-success" >Düzenle</a>' .
                    '<a class="btn btn-sm btn-danger ml-1"  onclick=" sil(\'' . url('tedarikci/sil', ['id' => $tablo->id]) . '\')">Sil</a>


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
            $tedarikci = Tedarikciler::find($id);

            if ($tedarikci) {
                $data['tedarikci'] = $tedarikci;
                $data['title'] = 'Tedarikçi güncelle';
                return view('tedarikciler.guncelle', $data);
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
        $tedarikci = Tedarikciler::find($request->id);

        $tedarikci->tedarikci_adsoyad = $request->tedarikci_adsoyad;
        $tedarikci->telefon = $request->telefon;
        $tedarikci->tedarikci_tipi = $request->tedarikci_tipi;



        $sonuc = $tedarikci->save();
        if ($sonuc) {
            return redirect('/tedarikci/ekle')->with([
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

        $data = Tedarikciler::findOrFail($id)->delete();


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
