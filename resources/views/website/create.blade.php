@extends('layout.main')

  <!-- Content Wrapper. Contains page content -->
 @section('title', 'Form Tambah Data')
 @section('content') 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Website Menlhk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/website">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="alamat_url">Alamat Url</label>
                  <input type="text" class="form-control @error('alamat_url') is-invalid @enderror" id="alamat_url" placeholder="Masukkan Alamat Url" name="alamat_url">
                  @error('alamat_url')
                  <div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="ip_host" >IP Host</label>
                  <input type="text" class="form-control @error('ip_host') is-invalid @enderror" id="ip_host" placeholder="Masukkan IP Host" name="ip_host">
                  @error('ip_host')
                  <div class="invalid-feedback">{{$message}}</div>@enderror
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

    </section>

  </div>

@endsection

