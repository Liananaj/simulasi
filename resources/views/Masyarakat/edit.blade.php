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
              <h6>Management Edit Category</h6>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                
              <form method="post" action="{{ route('masyarakat.update', ['id' => $masyarakat->id]) }}" enctype="multipart/form-data">
                    @csrf
                <table class="table align-items-center mb-0">
              <thead>
                  
              <form>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">nik</label>
                  <input class="form-control" type="number" name="nik" value="{{ $masyarakat->nik }}" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">nama</label>
                  <input class="form-control" type="text" name="nama" value="{{ $masyarakat->nama }}" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">username</label>
                  <input class="form-control" type="text" name="username" value="{{ $masyarakat->username }}" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">password</label>
                  <input class="form-control" type="text" name="password" value="{{ $masyarakat->password }}" id="example-text-input">
                </div>
                 <div class="form-group">
                  <label for="example-text-input" class="form-control-label">telpon</label>
                  <input class="form-control" type="number" name="telpon" value="{{ $masyarakat->telpon }}" id="example-text-input">
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