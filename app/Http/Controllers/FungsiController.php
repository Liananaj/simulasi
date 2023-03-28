<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fungsi;

class FungsiController extends Controller
{
    public function index()
    {
        $fungsi = Fungsi::all();
        return view('fungsi.index', compact('fungsi'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
        {
            return view('fungsi.create');
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
    
            $create = Fungsi::create([
                'nama_petugas' => $request->get('nama_petugas'),
                'username' => $request->get('username'),
                'password' => $request->get('password'),
                'telp' => $request->get('telp'),
                'level' => $request->get('level'),
    
            ]);
            
            // jika berhasil create
            if ($create) {
                // dan akan di arahkan ke halaman view barang bersama alert succes
                return redirect()->route('fungsi.index')->with('success', 'Data Berhasil Ditambahkan');
            }
            // jika gagal akan di arahkan ke halaman form create bersama alert error
            return redirect()->route('fungsi.create')->with('error', $error);
        }

        public function edit($id)
        {
            
            $fungsi = Fungsi::find($id);
            // mengarahkan ke halaman form edit 
            return view('fungsi.edit', compact('fungsi'));
        }
    
          // controller sistem update
          public function update(Request $request, $id)
          {
              // menarik data berdasarkan model barang sesuai id
              $fungsi = Fungsi::find($id);
              // validasi data
              $request-> validate([
                'nama_petugas' => 'required',
                'username' => 'required',
                'password' => 'required',
                'telp' => 'required',
                'level' => 'required'
            ]);
    
              $update = $fungsi->update([
                'nama_petugas' => $request->input('nama_petugas'),
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'telp' => $request->input('telp'),
                'level' => $request->input('level')
              ]);
    
              if ($update) {
                  return redirect()->route('fungsi.index')->with('success', 'Data Berhasil Diperbaharui');
              }
              // jika gagal akan di arahkan ke halaman form edit bersama alert error
              return redirect()->route('fungsi.edit')->with('error', $error);    
            }
            public function destroy($id, request $request) 
            {
              $time = Fungsi::find($id)->delete();
      
              return redirect()->route('fungsi.index')->with('success', 'Data Berhasil Dihapus');
            }
}