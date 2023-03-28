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
              <form method="post" action=""  enctype="multipart/form-data">
                   @csrf
                <table class="table align-items-center mb-0">
              <thead>

              <form>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nama Petugas</label>
                  <input class="form-control" type="text" name="nama_petugas" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Username</label>
                  <input class="form-control" type="text" name="username"value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Password</label>
                  <input class="form-control" type="text" name="password" value="" id="example-text-input">
                </div>
                 <div class="form-group">
                  <label for="example-text-input" class="form-control-label">telpon</label>
                  <input class="form-control" type="number" name="telp" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="inputSelect" class="form-control-label">Level</label>
                  <select class="form-select fs-4" name="level" id="example-text-input">
                  <option value="">Pilih Role</option>
                  <option value="Petugas ">Petugas</option>
                  <option value="Admin">Admin</option>
                  </select> 
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
