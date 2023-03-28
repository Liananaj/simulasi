@extends('layouts.master')
@section('content')

<section id="main-content">
  <section class="wrapper">

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
      
              <h6>Petugas</h6>
              <a href="{{ route('petugas.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                
              <form action="{{ route('petugas.store') }}"  method="post">
                        @csrf
                        <table class="table table-bordered border-primary">
                  <thead>
                    <tr>
                    <th scope="col">No </th>
                    <th scope="col">Nama Petugas </th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Telpon</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($petugas as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{$item->nama_petugas}}</td>
                            <td>{{$item->username}}</td>
                            <td>{{$item->password}}</td>
                            <td>{{$item->telp}}</td>
                            <td>{{$item->level}}</td>
                            <td>
                            <a href="{{ route('petugas.edit', ['id' => $item->id]) }}" class="btn btn-sm bg-warning" data-id="{{ $item->id }}"><i class="fa fa-edit" aria-hidden="true"> Edit</i></a>
                 <a href="{{ route('petugas.delete', ['id' => $item->id]) }}" class="btn btn-sm text-white bg-danger" data-id="{{ $item->id }}"><i class='fa fa-trash'> Delete</i></i></a>
                         
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