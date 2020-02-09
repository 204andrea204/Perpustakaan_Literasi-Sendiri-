@extends('layouts.admin')
@section('content')


<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">Pengembalian Buku</h5>
                </div>
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <a>Berbagai Macam Buku Bermanfaat</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body" style="text-align: center;">
                <div class="">
                    <a href="/buku/add">
                        <button type="submit" class="btn btn-outline-primary waves-effect waves-light" style="width: 10%;">
                            <i class="fas fa-plus fa-lg"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body"> 

                <h4 class="mt-0 header-title">Buku Yang Terpinjam</h4>
                <p class="text-muted m-b-30 font-14">
                    Data Data
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                              <th>Nama Peminjam</th>
                              <th>Alamat</th>
                              <th>Judul Buku</th>
                              <th>Tanggal Pinjam</th>
                              <th>Tanggal Kembali</th>
                              <th>Action</th>
                        </tr>
                    </thead>
                    @foreach($peminjamen as $q)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                              <td>{{$q->namapeminjam}}</td>
                              <td>{{$q->alamatpeminjam}}</td>
                              <td>{{$q->buku->judulbuku}}</td>
                              <td>{{$q->tanggalpinjam}}</td>
                              <td>{{$q->tanggalkembali}}</td>
                            <td>
                                <a href="/ambilbuku/kembalikan/{{$q->id}}" class="btn btn-outline-primary">Kembalikan 
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
@endsection