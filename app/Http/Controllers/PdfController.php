<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function document()
    {
        $data = [
            'title' => 'welcome to laravel',
            'date' => date('m/d/Y')
        ];

        $pdf = Pdf::loadView('testPDF', $data);

        return $pdf->download('deneme.pdf');
    }
}
