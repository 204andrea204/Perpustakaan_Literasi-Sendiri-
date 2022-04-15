@extends('layouts.admin')
@section('content')

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">Informasi Peminjaman</h5>
                </div>
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <a>Detail Informasi Peminjaman Buku</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="POST" action="/ambilbuku/savekembali">
@csrf
<input type="hidden" name="namapengembali" value="{{ $peminjaman->namapeminjam }}">
<input type="hidden" name="tanggalkembali" value="{{ $peminjaman->tanggalkembali }}">
<input type="hidden" name="buku_id" value="{{ $peminjaman->buku_id }}">
<input type="hidden" name="peminjaman_id" value="{{ $peminjaman->id }}">
<input type="hidden" name="denda" value="{{ $peminjaman->buku->denda->denda }}">
<div class="row">
    <div class="col-12 col-md-3">
        <div class="card m-b-30">
            <div class="card-body">
                <h5 class="card-title">Judul Buku : {{ $peminjaman->buku->judulbuku }}</h5>
                <p class="card-text">Pembuat Buku : {{ $peminjaman->buku->pembuat }}</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-9">
        <div class="card m-b-30">
            <div class="card-title">
                <h4>Informasi Peminjaman</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Nama Peminjam : {{ $peminjaman->namapeminjam }}</p>
                <p class="card-text">Alamat : {{ $peminjaman->alamatpeminjam }}</p>
                <p class="card-text">Tanggal Meminjam : {{ $peminjaman->tanggalpinjam }}</p>
                <p class="card-text">Tanggal Kembali : {{ $peminjaman->tanggalkembali }}</p>

                <p class="card-text">Keterangan : {{ $keterangan }}</p>
            </div>
            <button>Kembalikan</button>
        </div>
    </div>
</div>
</form>


@endsection