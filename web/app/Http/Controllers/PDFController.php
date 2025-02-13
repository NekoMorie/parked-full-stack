<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PDFController extends Controller
{
    public function downloadPdf()
    {
        // Ambil data hasil diagnosis
        $apiResponse = session('apiResponse'); // atau ambil data sesuai dengan implementasi Anda

        // Buat view untuk PDF
        $pdf = PDF::loadView('pdf.diagnosis', compact('apiResponse'));

        // Unduh file PDF
        return $pdf->download('diagnosis-result.pdf');
    }
}
