<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengaduanAdmin;

class PengaduanAdminController extends Controller
{
    public function index()
    {
        $pengaduanadmin = PengaduanAdmin::all();
        return view('pengaduanadmin.index', compact('pengaduanadmin'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function create()
    {
        return view('pengaduanadmin.create');
    }
  
}
