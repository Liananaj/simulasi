@extends('layouts.master')
@section('content')

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<section id="main-content">
  <section class="wrapper">

<div class="col-lg-7">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Beri Tanggapan</h6>
              
            </div>
            <div class="card-body p-3">
              <div class="table-responsive p-0">
              <form method="post" action="{{ route('tanggapan.store') }}" enctype="multipart/form-data">
                   @csrf
            <table class="table align-items-center mb-0">
              <thead>

              <form>
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Tanggal</label>
                  <input class="form-control" type="date" name="tgl_tanggapan " value="" id="example-text-input">

                  {{ dd($pengaduan) }}
                  <input type="hidden" name="id_petugas" value="{{ Auth::guard('petugas')->user()->id }}">
                        <input type="hidden" name="id_pengaduan" value="{{ dd($pengaduan) }}">
                </div>

                  <br>
              <textarea id="summernote" name="tanggapan"></textarea>
                    <script>
                        $('#summernote').summernote({
                            placeholder: 'Tanggapan',
                            tabsize: 2,
                            height: 100
                        });
                        </script>

            <div class="form-group">
                                <strong>Status :</strong>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status1"
                                            value="proses" checked>
                                        <label class="form-check-label" for="status1">
                                            Proses
                                        </label>
                                    </div>
                                    <div class="form-check ms-5">
                                        <input class="form-check-input" type="radio" name="status" id="status2"
                                            value="selesai">
                                        <label class="form-check-label" for="status2">
                                            Selesai
                                        </label>
                      </div>
                      </div>
                      </div>   
                    </form>
                      </thead>
<tbody>
                    <button type="submit" class="btn btn-primary fs-7">Create</button>
                      </tbody>
                
            </div>
          </div>
        </div>
      </div>

      @endsection