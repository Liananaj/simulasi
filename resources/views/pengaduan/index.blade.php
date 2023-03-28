@extends('layouts.master')
@section('content')


<section id="main-content">
  <section class="wrapper">

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
      
              <h6>Pengaduan</h6>
              <a href="{{ route('pengaduan.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                
              <form action="{{ route('masyarakat.store') }}" method="post">
                        @csrf
                        <table class="table table-bordered border-primary">
                  <thead>
                    <tr>
                    <th scope="col">No </th>
                    <th scope="col">Tanggal Pengaduan </th>
                    <th scope="col">Judul Laporan</th>
                    <th scope="col">Isi Laporan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Jenis Pengaduan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($pengaduan as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{$item->tgl_pengaduan}}</td>
                            <td>{{$item->judul_laporan}}</td>
                            <td>{!! $item->isi_laporan !!}</td>
                            <td><img src="{{ asset($item->foto) }}" alt="" width="100px"></td>
                            <td>{{$item->jenis_pengaduan}}</td>
                            <td>{{$item->status}}</td>
                            <td>

                            
                  <a href="{{ route('pengaduan.edit', ['id' => $item->id]) }}" class="btn btn-sm text-white bg-danger" data-id="{{ $item->id }}"><i class='fa fa-trash'> Edit</i></i></a>
                 <a href="{{ route('pengaduan.delete', ['id' => $item->id]) }}" class="btn btn-sm text-white bg-danger" data-id="{{ $item->id }}"><i class='fa fa-trash'> Delete</i></i></a>
                 <a href="{{ route('pengaduan.show', ['id' => $item->id]) }}" class="btn btn-sm text-white bg-danger" data-id="{{ $item->id }}"><i class='fa fa-trash'> Show</i></i></a>
                                  <!-- Button trigger modal -->

                            </td>
                        </tr>

<!-- Modal -->
          
        
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


              