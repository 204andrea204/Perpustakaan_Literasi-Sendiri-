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
                <form action="/buatuser/tambah" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p>Nama</p>
                    <input type="text" name="name" class="form-control" placeholder="Masukan Nama Anda" required=""><br>
                    <p>Email</p>
                    <input type="email" name="email" class="form-control" placeholder="Masukan Email Anda" required=""><br>
                    <p>Password</p>
                    <input type="Password" name="password" class="form-control" placeholder="Masukan Password Anda" required=""><br>
                    <p>Hak Akses</p>
                    <select class="form-control" name="role">
                        <option value="">Pilih data Hak Akses....</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select><br>
                    <p>Foto</p>
                    <input type="file" name="foto" class="form-control" placeholder="Masukan foto Anda" required=""><br>

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