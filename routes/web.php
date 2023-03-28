<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\FungsiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengaduanAdminController;
use App\Http\Controllers\LaporanController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Masyarakat
Route::get('/masyarakat/index', [MasyarakatController::class, 'index'])->name('masyarakat.index');
Route::get('/masyarakat/create', [MasyarakatController::class, 'create'])->name('masyarakat.create');
Route::post('/masyarakat/create', [MasyarakatController::class, 'store'])->name('masyarakat.store');
Route::get('/masyarakat/update/{id}', [MasyarakatController::class, 'edit'])->name('masyarakat.edit');
Route::post('/masyarakat/update/{id}', [MasyarakatController::class, 'update'])->name('masyarakat.update');
Route::get('/masyarakat/delete/{id}', [MasyarakatController::class, 'destroy'])->name('masyarakat.delete');

//Pengaduan
Route::get('/pengaduan/index', [PengaduanController::class, 'index'])->name('pengaduan.index');
Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan/create', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/pengaduan/update/{id}', [PengaduanController::class, 'edit'])->name('pengaduan.edit');
Route::post('/pengaduan/update/{id}', [PengaduanController::class, 'update'])->name('pengaduan.update');
Route::get('/pengaduan/delete/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.delete');
Route::get('/pengaduan/show/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');

Route::get('/tanggapan/index/', [TanggapanController::class, 'index'])->name('tanggapan.index');
Route::get('/tanggapan/create/{id_pengaduan}', [TanggapanController::class, 'create'])->name('tanggapan.create');
Route::post('/tanggapan/create/{id_pengaduan}', [TanggapanController::class,'store'])->name('tanggapan.store');

Route::get('/petugas/index/', [PetugasController::class, 'index'])->name('petugas.index');
Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
Route::post('/petugas/create', [PetugasController::class,'store'])->name('petugas.store');
Route::get('/petugas/update/{id}', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::post('/petugas/update/{id}', [PetugasController::class, 'update'])->name('petugas.update');
Route::get('/petugas/delete/{id}', [PetugasController::class, 'destroy'])->name('petugas.delete');


Route::get('/fungsi/index/', [FungsiController::class, 'index'])->name('fungsi.index');
Route::get('/fungsi/create', [FungsiController::class, 'create'])->name('fungsi.create');
Route::post('/fungsi/create', [FungsiController::class,'store'])->name('fungsi.store');
Route::get('/fungsi/update/{id}', [FungsiController::class, 'edit'])->name('fungsi.edit');
Route::post('/fungsi/update/{id}', [FungsiController::class, 'update'])->name('fungsi.update');
Route::get('/fungsi/delete/{id}', [FungsiController::class, 'destroy'])->name('fungsi.delete');
// middleware admin petugas dan masyarakat di view pengaduan

Route::get('/pengaduanadmin/index/', [PengaduanAdminController::class, 'index'])->name('pengaduanadmin.index');
Route::get('/pengaduanadmin/create', [PengaduanAdminController::class, 'create'])->name('pengaduanadmin.create');

Route::get('/pdf/laporan', [LaporanController::class, 'index'])->name('pdf.laporan');

Route::get('/pdf/generate', [LaporanController::class, 'generataPDF'])->name('pdf.generate');