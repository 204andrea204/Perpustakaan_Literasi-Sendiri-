@extends('layouts.user')
@section('content')


<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">Edit Artikel</h5>
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
                <form action="/artikel/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$artikels->id}}">
                    <p>Judul Buku</p>
                    <input type="text" name="judul" class="form-control" placeholder="Judul Buku" required="" value="{{$artikels->judul}}"><br>

                    <div class="row">
                            <div class="col-12 col-md-6">
                                <p>Kategori Buku</p>
                                <select class="form-control" name="kategori_id" required="">
                                        <option selected>Pilih Kategori.....</option>
                                        @foreach($kategoris as $j)
                                        @if($j->id == $artikels->kategori_id)
                                        <option value="{{$j->id}}" selected>{{$j->nama}}</option>
                                        @else
                                        <option value="{{$j->id}}">{{$j->nama}}</option>
                                        @endif
                                        @endforeach
                                    </select>   
                            </div>
                    </div><br>
                    <p>Pembuat Buku</p>
                    <input type="text" name="pembuat" class="form-control" placeholder="Pembuat Buku" required="" value="{{$artikels->pembuat}}"><br>
                    <p>Isi Buku</p>
                    <input type="text" name="isi" class="form-control" placeholder="Isi Buku" value="{{$artikels->isi}}" src="{{url('isibuku/'. $artikels->isi)}}"><br>

                    <p>Deskripsi</p>
                    <textarea name="deskripsi" placeholder="Keterangan" class="form-control" required="">{{$artikels->deskripsi}}</textarea><br>

                    <p>Gambar Buku</p>
                    <input type="file" name="gambar" class="form-control" placeholder="Foto Buku" value="{{$artikels->gambar}}"><br>
                    <center><br>
                    <div class="form-group col-md-12">
                        <img src="{{url('gambarArtikel/'. $artikels->gambar)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
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