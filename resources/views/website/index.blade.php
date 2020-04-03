<!-- Content Wrapper. Contains page content -->
@extends('layout.main')

@section('title','Website Menlhk')


@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Website Menlhk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Website Menlhk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="/website/create" class="btn btn-primary">Tambah Data</a>
        </div>

        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status')}}
          </div>
        @endif
        
        <div class="box-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Alamat Url</th>
                <th scope="col">IP Address</th>
                <th scope="col">Status Host</th>
                <th scope="col">Aksi</th>
                <th scope="col">Http Status</th>
              </tr>
            </thead>
            <tbody>
             @foreach($websites as $webs)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td> {{ $webs -> alamat_url}}</td>
                <td> {{ $webs -> ip_host}}</td>
                <td>
                  <button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-ok"></i></button>
                </td>
                <td>
                  <button class="btn btn-primary btn-sm"><i class='glyphicon glyphicon-pencil'></i> Edit</button>
                  
                  <button class='btn btn-danger btn-sm' href="/wesite/destroy/{{$webs->id}}"> Hapus
                    <i class='glyphicon glyphicon-trash'></i>
                  </button>
                  
                </td>
                <td>
                  <button class="btn btn-info"><i class="glyphicon glyphicon-flag"></i> Detail</button>
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body 
        <div class="box-footer">
          Footer
        </div>-->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection