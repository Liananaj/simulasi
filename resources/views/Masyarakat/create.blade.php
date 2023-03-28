@extends('layouts.master')
@section('content')

<!--main content start-->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Create Masyarakat</h6>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <form method="post" action="{{ route('masyarakat.store') }}" enctype="multipart/form-data">
                   @csrf
                <table class="table align-items-center mb-0">
              <thead>

              <form>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">nik</label>
                  <input class="form-control" type="number" name="nik" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nama</label>
                  <input class="form-control" type="text" name="nama" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Username</label>
                  <input class="form-control" type="text" name="username" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Password</label>
                  <input class="form-control" type="text" name="password" value="" id="example-text-input">
                </div>
                 <div class="form-group">
                  <label for="example-text-input" class="form-control-label">telpon</label>
                  <input class="form-control" type="number" name="telpon" value="" id="example-text-input">
                </div>
              </form>
</thead>
<tbody>
                    <button type="submit" class="btn btn-primary fs-7">Create</button>
</tbody>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection          