@extends('layouts.admin')
@section('content')


<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">Buku</h5>
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

                <h4 class="mt-0 header-title">Default Datatable</h4>
                <p class="text-muted m-b-30 font-14">
                    Data Data
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Kategori Buku</th>
                            <th>Stok Buku</th>
                            <th>isi</th>
                            <th>gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach($bukus as $s)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$s->judulbuku}}</td>
                            <td>{{$s->kategori->nama}}</td>
                            <td>{{$s->stok}}</td>
                            <td>{{$s->isi}}</td>
                            <td><img src="{{ asset('gambar/'.$s->gambar) }}" style="width: 50px;height: 50px;"></td>
                            <td>
                                <a href="/buku/edit/{{$s->id}}" class="btn btn-outline-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="/buku/hapus/{{$s->id}}" class="btn btn-outline-danger">
                                    <i class="far fa-trash-alt"></i>
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