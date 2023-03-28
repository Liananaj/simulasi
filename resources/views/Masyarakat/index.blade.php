@extends('layouts.master')
@section('content')

<section id="main-content">
  <section class="wrapper">

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
      
              <h6>Masyarakat</h6>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                
              <form action="{{ route('masyarakat.store') }}" method="post">
                        @csrf
                        <table class="table table-bordered border-primary">
                  <thead>
                    <tr>
                    <th scope="col">No </th>
                    <th scope="col">Nik </th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Telpon</th>
                    <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($masyarakat as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{$item->nik}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->password}}</td>
                            <td>{{$item->telp}}</td>
                            <td>
                 <a href="{{ route('masyarakat.edit', ['id' => $item->id]) }}" class="btn btn-sm bg-warning" data-id="{{ $item->id }}"><i class="fa fa-edit" aria-hidden="true"> Edit</i></a>
                 <a href="{{ route('masyarakat.delete', ['id' => $item->id]) }}" class="btn btn-sm text-white bg-danger" data-id="{{ $item->id }}"><i class='fa fa-trash'> Delete</i></i></a>
                             
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