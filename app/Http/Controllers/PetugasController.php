<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        if(Auth::guard('petugas')->user()->level == "petugas") {
            return back()->with('error', 'Tidak bisa mengubah data petugas, anda bukan admin!');
    }
            return view('petugas.create');
        }

        public function store(Request $request)
        {
            $request-> validate([
                'nama_petugas' => 'required',
                'username' => 'required',
                'password' => 'required',
                'telp' => 'required',
                'level' => 'required',   
    
            ]);
    
            $create = Petugas::create([
                'nama_petugas' => $request->get('nama_petugas'),
                'username' => $request->get('username'),
                'password' => $request->get('password'),
                'telp' => $request->get('telp'),
                'level' => $request->get('level'),
    
            ]);
            
            // jika berhasil create
            if ($create) {
                // dan akan di arahkan ke halaman view barang bersama alert succes
                return redirect()->route('petugas.index')->with('success', 'Data Berhasil Ditambahkan');
            }
            // jika gagal akan di arahkan ke halaman form create bersama alert error
            return redirect()->route('petugas.create')->with('error', $error);
        }

        public function edit($id)
        {
            
            $petugas = Petugas::find($id);
            // mengarahkan ke halaman form edit 
            return view('petugas.edit', compact('petugas'));
        }
    
          // controller sistem update
          public function update(Request $request, $id)
          {
              // menarik data berdasarkan model barang sesuai id
              $petugas = Petugas::find($id);
              // validasi data
              $request-> validate([
                'nama_petugas' => 'required',
                'username' => 'required',
                'password' => 'required',
                'telp' => 'required',
                'level' => 'required'
            ]);
    
              $update = $petugas->update([
                'nama_petugas' => $request->input('nama_petugas'),
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'telp' => $request->input('telp'),
                'level' => $request->input('level')
              ]);
    
              if ($update) {
                  return redirect()->route('petugas.index')->with('success', 'Data Berhasil Diperbaharui');
              }
              // jika gagal akan di arahkan ke halaman form edit bersama alert error
              return redirect()->route('petugas.edit')->with('error', $error);    
            }
            public function destroy($id, request $request) 
            {
              $time = Petugas::find($id)->delete();
      
              return redirect()->route('petugas.index')->with('success', 'Data Berhasil Dihapus');
            }
}