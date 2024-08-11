<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;


class PDFController extends Controller
{
    public function generatePDF()
    {
        $audits = "audit.pdf";

        $audits = [
            'title' => 'LAPORAN KKA'
        ];

        $html = view('preview_sp2a.index')->make('pdfSample',$audits)->render();

        $pdf = new TCPDF();
        $pdf::SetTitle('TONASA');
        $pdf::AddPage();
        $pdf::writeHTML($html,true,false,true,false,"");
        $pdf::Output(public_path($audits),"F");

        return response()->download(public_path($audits));

    }
}


