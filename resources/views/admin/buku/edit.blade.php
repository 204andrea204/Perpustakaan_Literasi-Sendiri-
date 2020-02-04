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
                <form action="/buku/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$bukus->id}}">
                    <input type="text" name="judulbuku" class="form-control" placeholder="Judul Buku" required="" value="{{$bukus->judulbuku}}"><br>

                    <div class="row">
                            <div class="col-12 col-md-6">
                                <select class="form-control" name="kategori_id" required="">
                                        <option selected>Pilih Mapel......</option>
                                        @foreach($kategoris as $j)
                                        @if($j->id == $bukus->kategori_id)
                                        <option value="{{$j->id}}" selected>{{$j->nama}}</option>
                                        @else
                                        <option value="{{$j->id}}">{{$j->nama}}</option>
                                        @endif
                                        @endforeach
                                    </select>   
                            </div>

                            <div class="col-12 col-md-6">
                            <input type="text" name="stok" class="form-control" placeholder="Stok Buku" required="" value="{{$bukus->stok}}"><br>
                            </div>
                    </div>
                    <input type="text" name="pembuat" class="form-control" placeholder="Pembuat Buku" required="" value="{{$bukus->pembuat}}"><br>
                    <input type="file" name="isi" class="form-control" placeholder="Isi Buku" value="{{$bukus->isi}}" src="{{url('isibuku/'. $bukus->isi)}}"><br>


                    <textarea name="deskripsi" placeholder="Keterangan" class="form-control" required="">{{$bukus->deskripsi}}</textarea><br>


                    <input type="file" name="gambar" class="form-control" placeholder="Foto Buku" value="{{$bukus->gambar}}"><br>
                    <center><br>
                    <div class="form-group col-md-12">
                        <img src="{{url('gambar/'. $bukus->gambar)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
                    </div>
                    </center>

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

<script type="text/javascript">
                         function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah1')
                            .attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>



@endsection