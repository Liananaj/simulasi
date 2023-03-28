@extends('layouts.master')
@section('content')

<section id="main-content">
  <section class="wrapper">

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
      
              <h6>Detail Tanggapan</h6>
            
            </div>
            <div class="card-body p-3">
              <div class="table-responsive p-0">
     
            <table class="table align-items-center mb-0">
              <thead>

              <form>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Tanggal Tanggapan</label>
                  <input class="form-control" type="date" name="tgl_tanggapan" value="{{ $pengaduan->tanggapan->tgl_tanggapan }}" id="example-text-input" disabled>
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nama Petugas</label>
                  <input class="form-control" type="text" name="nama_petugas" value="{{ $petugas->nama_petugas }}" id="example-text-input" disabled>
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Tanggapan</label>
                  <input class="form-control" type="text" name="tanggapan" value="" id="example-text-input" disabled>
                </div>
                    </form>
                      </thead>
<tbody>
                
                      </tbody>
                
            </div>
          </div>
        </div>
      </div>

      @endsection