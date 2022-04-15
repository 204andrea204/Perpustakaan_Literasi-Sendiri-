@extends('layouts.user')
@section('content')


<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">Tambah Artikel</h5>
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
                <form action="/artikel/tambah" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p>Judul Artikel</p>
                    <input type="text" name="judul" class="form-control" placeholder="Judul Artikel" required=""><br>

                    <div class="row">
                            <div class="col-12 col-md-6">
                            <p>Kategori Artikel</p>
                                <select class="form-control" name="kategori_id" required="">
                                        <option value="">Pilih Kategori</option>
                                        @foreach($kategori as $j)
                                        <option value="{{$j->id}}">{{$j->nama}}</option>
                                        @endforeach
                                    </select>   
                            </div>
                            <div class="col-12 col-md-6">
                                <p>Pembuat Artikel</p>
                                <input type="text" name="pembuat" class="form-control" placeholder="Pembuat Buku" required=""><br>
                            </div>
                    </div><br>


                    <p>Isi Buku</p>
                    <textarea id="elm1" name="isi" id="" cols="30" rows="10"></textarea><br>
                    <p>Deskripsi Buku</p>
                    <textarea  name="deskripsi" placeholder="Keterangan" class="form-control" required=""></textarea><br>
                    
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