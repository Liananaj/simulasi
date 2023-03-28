@extends('layouts.master')
@section('content')

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<!--main content start-->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pengaduan</h6>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <form method="post" action="{{ route('pengaduan.store') }}" enctype="multipart/form-data">
                   @csrf
                <table class="table align-items-center mb-0">
              <thead>

              <form>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Tanggal Pengaduan</label>
                  <input class="form-control" type="date" name="tgl_pengaduan" value="" id="example-text-input">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Judul laporan</label>
                  <input class="form-control" type="text" name="judul_laporan" value="" id="example-text-input">
                </div>
                <br>
              <textarea id="summernote" name="isi_laporan"></textarea>
                    <script>
                        $('#summernote').summernote({
                            placeholder: 'Deskripsi',
                            tabsize: 2,
                            height: 100
                        });
                        </script>

                  <div class="form-group">
                    <label for="inputSelect" class="form-label fs-4">Jenis Aduan</label>
                    <select class="form-select fs-4" name="jenis_pengaduan" required aria label="Default select example" id="inputSelect">
                      <option value="public ">Public</option>
                      <option value="private">Private</option>
                      </select>   
                  <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Foto</label>
                  <input class="form-control" type="file" name="foto" value="" id="example-text-input">
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