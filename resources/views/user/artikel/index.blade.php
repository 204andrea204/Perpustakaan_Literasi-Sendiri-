@extends('layouts.user')
@section('content')

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">Artikel</h5>
                </div>
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <a>Menulis Artikel Mu sendiri</a>
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
                    <a href="/artikel/add">
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
                            <th>Deskripsi</th>
                            <th>isi</th>
                            <th>gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                        $artikels = \App\Artikel::where('user_id', Auth::user()->id)->get();
                        ?>
                    @foreach($artikels as $s)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$s->judul}}</td>
                            <td>{{$s->kategori->nama}}</td>
                            <td>{{$s->deskripsi}}</td>
                            <td>
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Baca Artikel</button>
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">{{$s->judul}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {!!$s->isi!!}
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                            </td>
                            <td><img src="{{ asset('gambarArtikel/'.$s->gambar) }}" style="width: 50px;height: 50px;"></td>
                            <td>
                                <a href="/artikel/edit/{{$s->id}}" class="btn btn-outline-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="/artikel/hapus/{{$s->id}}" class="btn btn-outline-danger">
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