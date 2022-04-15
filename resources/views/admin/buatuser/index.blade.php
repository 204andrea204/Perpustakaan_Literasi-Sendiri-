@extends('layouts.admin')
@section('content')

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-left page-breadcrumb">
                    <h5 class="page-title" style="">User</h5>
                </div>
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <a>Menambah kan Pengguna</a>
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
                    <a href="/buatuser/add">
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

                <h4 class="mt-0 header-title">Data User</h4>
                <p class="text-muted m-b-30 font-14">
                    Data Data
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>role</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    	<?php
                    	$buatuser = \App\User::all(); 
                    	?>
                        @foreach($buatuser as $j)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$j->name}}</td>
                            <td>{{$j->email}}</td>
                            <td>{{$j->role}}</td>
                            <td>{{$j->foto}}</td>
                            <td>
                                <a href="/buatuser/edit/{{$j->id}}" class="btn btn-outline-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="/buatuser/delete/{{$j->id}}" class="btn btn-outline-danger">
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