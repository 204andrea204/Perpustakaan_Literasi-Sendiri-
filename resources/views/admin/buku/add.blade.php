@extends('layouts.admin')
@section('content')


<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">Tambah Buku</h5>
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
                <form action="/buku/tambah" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p>Judul Buku</p>
                    <input type="text" name="judulbuku" class="form-control" placeholder="Judul Buku" required=""><br>

                    <div class="row">
                            <div class="col-12 col-md-6">
                    <p>Kategori Buku</p>
                                <select class="form-control" name="kategori_id" required="">
                                        <option value="">Pilih Kategori</option>
                                        @foreach($kategori as $j)
                                        <option value="{{$j->id}}">{{$j->nama}}</option>
                                        @endforeach
                                    </select>   
                            </div><br>
                            <div class="col-12 col-md-6">
                            <p>Stok Buku</p>
                            <input type="text" name="stok" class="form-control" placeholder="Stok Buku" required=""><br>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-12 col-md-12">
                    <p>Denda Buku</p>
                                <select class="form-control" name="denda_id" required="">
                                        <option value="">Pilih Denda Buku</option>
                                        @foreach($denda as $j)
                                        <option value="{{$j->id}}">{{$j->kategori_denda}} = {{$j->denda}}</option>
                                        @endforeach
                                    </select>   
                            </div>
                    </div><br>
                    <p>Pembuat Buku</p>
                    <input type="text" name="pembuat" class="form-control" placeholder="Pembuat Buku" required=""><br>
                    <p>Isi Buku</p>
                    <input type="file" name="isi" class="form-control" placeholder="Isi Buku" required=""><br>
                    <p>Deskripsi Buku</p>
                    <textarea name="deskripsi" placeholder="Keterangan" class="form-control" required=""></textarea><br>
                    <p>Foto Buku</p>
                    <input type="file" name="gambar" class="form-control" placeholder="Foto Buku" required=""><br>

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