<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    public function index()
    {
      
        $masyarakat = Masyarakat::all();
        return view('masyarakat.index', compact('masyarakat'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

 
    public function edit($id)
    {
        
        $masyarakat =Masyarakat::find($id);
        // mengarahkan ke halaman form edit 
        return view('masyarakat.edit', compact('masyarakat'));
    }

      // controller sistem update
      public function update(Request $request, $id)
      {
          // menarik data berdasarkan model barang sesuai id
          $masyarakat = Masyarakat::find($id);
          // validasi data
          $request-> validate([
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telp' => 'required',
        ]);

          $update = $masyarakat->update([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'telp' => $request->input('telp')
          ]);

          if ($update) {
              return redirect()->route('masyarakat.index')->with('success', 'Data Berhasil Diperbaharui');
          }
          // jika gagal akan di arahkan ke halaman form edit bersama alert error
          return redirect()->route('masyarakat.create')->with('error', $error);    
      }
      
      public function destroy($id, Request $request)
      {
         
          $time = Masyarakat::find($id)->delete();
  
          return redirect()->route('masyarakat.index')->with('success', 'Data Berhasil Dihapus');
  
      }
}



