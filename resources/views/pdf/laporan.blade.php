@extends('layouts.master')
@section('content')

<section id="main-content">
  <section class="wrapper">

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
      
              <h6>Laporan </h6>
              <a href="{{ route('pdf.generate') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Download</i></a>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
             
                        @csrf
                        <table class="table table-bordered border-primary">
                  <thead>
                    <tr>
                    <th scope="col">No </th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Pengaduan</th>
                    <th scope="col">Isi Pengaduan </th>
                    <th scope="col">Tanggal Tanggapan</th>
                    <th scope="col">Tanggapan</th>
                    <th scope="col">Status</th>
                   
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($laporan as $item)
                  <tr>

                    <td>{{ ++$i }}</td>
                    <td> {{ $item->pengaduan->masyarakat->nik }}</td>
                    <td> {{ $item->pengaduan->masyarakat->nama }}</td>
                    <td> {{ $item->pengaduan->tgl_pengaduan }}</td>
                    <td> {{ $item->pengaduan->isi_laporan }}</td>
                    <td> {{ $item->tgl_tanggapan }}</td>
                    <td> {{ $item->tanggapan }}</td>
                    <td> {{ $item->pengaduan->status }}</td>
                    <td>
                 </td> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
</table>
</div>
</div>
</div>
</div>
</section>
</section>
@endsection