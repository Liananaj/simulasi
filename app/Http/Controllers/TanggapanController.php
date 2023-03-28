<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggapan;
use App\Models\Pengaduan;

class TanggapanController extends Controller
{
    //
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', compact('tanggapan'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create($pengaduan_id)
    
    {
        $pengaduan = Pengaduan::find($pengaduan_id);

        return view('tanggapan.create', compact('pengaduan'));
    }


    public function store(Request $request, $pengaduan_id)
    {
        $validateData = $request->validate([
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
             'pengaduan_id' => 'required',
             'petugas_id' => 'required',
        ]);

        $updateStatus = Pengaduan::findOrFail($pengaduan_id);
        $updateStatus->status = $request->status;
        $updateStatus->update();

        $data = new Tanggapan;
        $data->pengaduan_id = $pengaduan_id;
        if ($request->status == 'Selesai') {
            $data->tgl_tanggapan = Carbon::now();
        }
        $data->tgl_tanggapan = $request->tgl_tanggapan;
        $data->tanggapan = $request->tanggapan;
        $data->petugas_id = $request->petugas_id;
        $data->save();

        return redirect()->route('tanggapan.index')->with('success', 'Data Berhasil Ditambahkan');
       }

}
