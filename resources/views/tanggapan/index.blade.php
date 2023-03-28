@extends('layouts.master')
@section('content')

<section id="main-content">
  <section class="wrapper">

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
      
              <h6>Tanggapan</h6>
             
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
             
                        @csrf
                        <table class="table table-bordered border-primary">
                  <thead>
                    <tr>
                    <th scope="col">No </th>
                    <th scope="col">Nama Petugas</th>
                    <th scope="col">Tanggal Tanggapan </th>
                    <th scope="col">Tanggapan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($tanggapan as $item)
                  <tr>

                    <td>{{ ++$i }}</td>
                    <td> {{ $item->petugas->nama_petugas }}</td>
                    <td> {{ $item->tgl_tanggapan }}</td>
                    <td> {{ $item->tanggapan }}</td>
                    <td> {{ $item->pengaduan->status }}</td>
                    <td>
                 <a href="" class="btn btn-sm bg-warning" data-id="{{ $item->id }}"><i class="fa fa-edit" aria-hidden="true"> Edit</i></a>
                 <a href="" class="btn btn-sm text-white bg-danger" data-id="{{ $item->id }}"><i class='fa fa-trash'> Delete</i></i></a>
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