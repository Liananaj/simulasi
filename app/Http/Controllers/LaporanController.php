<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggapan;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{

    public function index()
    {
    $laporan = Tanggapan::latest()->with('pengaduan', 'petugas')->get();
   
    return view('pdf.laporan', compact('laporan'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function generataPDF()
    {
        $tanggapan = Tanggapan::latest()->with('petugas', 'pengaduan')->get();
        $data = [ 
            'judul' => "Generate Tanggapan dan Pengaduan",
            'tanggapan' => $tanggapan,
        ];

        $pdf= Pdf::setOptions(['isHtml5ParserEnabled'=> true, 'isRemoteEnabled' => true])->loadView('pdf.generate', $data)->setPaper('a4',);
        return $pdf->stream();
    }
}
