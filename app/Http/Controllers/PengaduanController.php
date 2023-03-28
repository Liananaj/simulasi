<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\Pengaduan;
use App\Models\Masyarakat;


class PengaduanController extends Controller
{
    //
    public function index()
     {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduan'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
  
    public function indexPublic()
    {
      $pengaduan = Pengaduan::where('jenis_pengaduan', '=', 'public')->latest()->paginate(5);
      return view('pengaduan.index',  compact('pengaduan'));
    }


    public function create()
    {
        return view('pengaduan.create');
    }
    public function store(Request $request)
    {
        //validasi data
        $validateData = $request->validate([
            'tgl_pengaduan' => 'required',
            'judul_laporan' => 'required',
            'isi_laporan'  => 'required',
            'foto' => 'required',
            'jenis_pengaduan' => 'required',
            

        ]);

        $fileImage = hexdec(uniqid()) . "." . $request->foto->extension();
        Image::make($request->file('foto'))->save('assets/images/' . $fileImage);
        $pengaduanImage = 'assets/images/' . $fileImage;

        $validateData ['foto'] = $pengaduanImage;
        $validateData ['status'] = 'Pending';

        $validateData['masyarakat_id'] = Auth::guard('masyarakat')->user()->id;
         Pengaduan::create($validateData);
        
        if ($validateData) {
         // foto akan masuk ke storage di public/Image dengan nama sesuai $filename
        
            return redirect()->route('pengaduan.index')->with('success', 'Data Berhasil Ditambahkan');
        }
        return redirect()->route('pengaduan.create')->with('error', 'Data Gagal Ditambahkan');
    }

    public function edit($id)
    {
        
        $pengaduan =Pengaduan::find($id);
        // mengarahkan ke halaman form edit 
        return view('pengaduan.edit', compact('pengaduan'));
    }

      // controller sistem update
      public function update(Request $request, $id)
      {
          // menarik data berdasarkan model barang sesuai id
          $pengaduan = Pengaduan::find($id);
          // validasi data
          $request-> validate([
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'judul_laporan' => 'required',
            'isi_laporan'  => 'required',
            'foto' => 'required',

         
        ]);

        $fileImage = hexdec(uniqid()) . "." . $request->foto->extension();
        Image::make($request->file('foto'))->save('assets/images/' . $fileImage);
        $pengaduanImage = 'assets/images/' . $fileImage;

        $validateData ['foto'] = $pengaduanImage;
        $validateData ['status'] = 'Pending';

          $update = $pengaduan->update([
            'tgl_pengaduan' => $request->input('tgl_pengaduan'),
            'nik' => $request->input('nik'),
            'judul_laporan' => $request->input('judul_laporan'),
            'isi_laporan' => $request->input('isi_laporan'),
            'status' => $request->input('status'),
            'foto' => $filename,
            
          ]);

          if ($update) {
              return redirect()->route('pengaduan.index')->with('success', 'Data Berhasil Diperbaharui');
          }
          // jika gagal akan di arahkan ke halaman form edit bersama alert error
          return redirect()->route('pengaduan.create')->with('error', $error);    
      }

      public function destroy($id, request $request) 
      {
        $time = Pengaduan::find($id)->delete();

        return redirect()->route('pengaduan.index')->with('success', 'Data Berhasil Dihapus');
      }

      public function show ($id)
      {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.show', compact('pengaduan'))->with('i', (request()->input('page', 1) - 1) * 10);
        
      }
      

      
    }