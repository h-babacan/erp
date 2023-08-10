<?php

namespace App\Http\Controllers;

use App\Models\Muhasebe;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function document($id)
    {
        //echo $id;

        $data['muhasebe'] = Muhasebe::find($id);

        $pdf = PDF::loadView('testPDF', $data)->output();;

        //return $pdf->download('test.pdf');
        return response()->streamDownload(
            fn () => print($pdf),
            "fatura.pdf"
        );
    }

    public  function goruntule(){
        return view('testPDF');
    }

    public function index(){

    }

}
