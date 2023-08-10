<?php

    // app/Http/Controllers/FaturaController.php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Yajra\DataTables\DataTables;
    use App\Models\Fatura;

class FaturaController extends Controller
{
    public function index()
    {
        // Fatura listeleme sayfasını buraya ekleyebilirsiniz
        // Örnek olarak tüm faturaları listelemek için:
      //  $faturalar = Fatura::all();
       // return view('fatura_listesi', compact('faturalar'));
    }

    public function ekleFormuGoster()
    {
        return view('/muhasebe/fatura_ekle');
    }

    public function kaydet(Request $request)
    {
        $request->validate([
            'fatura_no' => 'required|string',
            'tutar' => 'required|numeric',
        ]);

        // Fatura modeli kullanarak veritabanına kaydetme işlemini yapalım
        Fatura::create([
            'fatura_no' => $request->fatura_no,
            'tutar' => $request->tutar,
        ]);

        return redirect()->route('fatura.listesi');
    }
}


