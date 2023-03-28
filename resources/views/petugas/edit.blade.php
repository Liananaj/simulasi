@extends('layouts.master')
@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Management Edit </h6>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                
              <form method="post" action="{{ route('petugas.update', ['id' => $petugas->id]) }}" enctype="multipart/form-data">
                    @csrf
                <table class="table align-items-center mb-0">
              <thead>
                  
              <form>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nama Petugas</label>
                  <input class="form-control" type="text" name="nama_petugas" value="{{ $petugas->nama_petugas }}" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">username</label>
                  <input class="form-control" type="text" name="username" value="{{ $petugas->username }}" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">password</label>
                  <input class="form-control" type="text" name="password" value="{{ $petugas->password }}" id="example-text-input">
                </div>
                 <div class="form-group">
                  <label for="example-text-input" class="form-control-label">telpon</label>
                  <input class="form-control" type="number" name="telp" value="{{ $petugas->telp }}" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="inputSelect" class="form-control-label">Level</label>
                  <select class="form-select fs-4" name="level" value="{{ $petugas->level}}" id="example-text-input">
                  <option value="">Pilih level</option>
                  <option value="Petugas ">Petugas</option>
                  <option value="Admin">Admin</option>
                  </select> 
                </div>
              </form>
            </div>
          </thead>
          <tbody>
            <button type="submit" class="btn btn-primary">Edit</button>
          </tbody>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
</section>
@endsection