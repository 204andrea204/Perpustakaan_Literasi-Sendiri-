@extends('layouts.user')
@section('content')

<style type="text/css">
    .imgs{
        max-width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 10%;
    }
</style>

@if(!empty(app('request')->q))
    &nbsp;
    &nbsp;
    <span class="text-muted mb-0 font-q">Ditemukan {{$bukus->count()}} Data dari Hasil Pencarian <span class="text-green">{{app('request')->q}}</span></span>
@endif

<form>
    <input class="form-control" type="text" name="q" placeholder="Search....">
</form>


<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">Kumpulan Buku Menarik</h5>
                </div>
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <a>Buku Bermanfaat Ada Disini</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body" style="text-align: center;">
                <form class="app-search">
                    <div class="form-group mb-0">
                        <input class="form-control" type="text" name="" placeholder="Search..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->


<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row">
                    @foreach($bukus as $bu)
                    <div class="col-md-6 col-xl-3">
                        <div class="card m-b-30">
                            <img class="imgs img-fluid" src="{{ asset('gambar/'.$bu->gambar) }}">
                            <div class="card-body-book">
                                <h7 class="card-title font-10 mt-0"><strong>{{$bu->judulbuku}}</strong></h7>
                                    <p class="card-text">
                                        {{Str::limit($bu->deskripsi, 10)}}
                                    </p>
                                    <a class="btn btn-primary waves-effect waves-light" href="{{ url('dabuku/bacabuku/'.$bu->isi) }}">Baca</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection