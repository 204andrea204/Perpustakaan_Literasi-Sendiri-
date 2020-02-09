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
            <div class="card-body">
                <form action="{{url('ambilbuku/postpinjam')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="namapeminjam" class="form-control" placeholder="Nama Peminjam" required=""><br>

                    <textarea name="alamat" placeholder="Alamat" class="form-control" required=""></textarea><br>
                    
                    <div class="row">
                            <div class="col-12 col-md-6">
                                <select class="form-control" name="judulbuku" required="">
                                        <option value="">Pilih buku</option>
                                        <?php
                                            $buku = \App\Buku::all();
                                        ?>
                                         @foreach($buku as $q)
                                        <option value="{{$q->judulbuku}}">{{$q->judulbuku}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            </div><br>

                        <div class="row">
                            <div class="col-12 col-md-6">
                            <label>Tanggal Pinjam</label>
                            <input type="date" name="tanggalpinjam" class="form-control" placeholder="Tanggal Pinjam" readonly="">
                            </div>
                            <div class="col-12 col-md-6">
                            <label>Tanggal Kembali</label>
                            <input type="date" name="tanggalkembali" class="form-control" placeholder="Tanggal Pengembalian" readonly=""><br>
                            </div>
                        </div><br>
                    <br>
                        <div style="text-align: center;">
                        <button type="submit" class="btn btn-outline-primary waves-effect waves-light" style="width: 50%;">
                            <i class="fas fa-plus fa-lg"></i>
                        </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection