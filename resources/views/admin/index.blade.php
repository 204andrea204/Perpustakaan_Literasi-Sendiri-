@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Andrea</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <h5 class="page-title">Dashboard</h5>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cube-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">User</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-account-network float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Buku</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-success"> +22% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Pengembalian Buku</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-danger"> -02% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cart-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Peminjaman Buku</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-success"> +10% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
            </div>
        </div>
    </div>
</div>


                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Perpustakaan</h4>

                                            <ul class="list-inline widget-chart m-t-20 text-center">
                                                <li>
                                                    <h4 class=""><b>3652</b></h4>
                                                    <p class="text-muted m-b-0">Buku</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>5421</b></h4>
                                                    <p class="text-muted m-b-0">Last week</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>9652</b></h4>
                                                    <p class="text-muted m-b-0">Last Month</p>
                                                </li>
                                            </ul>

                                            <div id="morris-area-example" style="height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Perpustakaan</h4>

                                            <ul class="list-inline widget-chart m-t-20 text-center">
                                                <li>
                                                    <h4 class=""><b>5248</b></h4>
                                                    <p class="text-muted m-b-0">Buku</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>321</b></h4>
                                                    <p class="text-muted m-b-0">Last week</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>964</b></h4>
                                                    <p class="text-muted m-b-0">Last Month</p>
                                                </li>
                                            </ul>
                                            <div id="morris-bar-example" style="height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

@endsection