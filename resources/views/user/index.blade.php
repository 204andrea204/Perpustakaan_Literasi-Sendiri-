@extends('layouts.user')
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
                <h6 class="text-uppercase mb-0">New Orders</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Last : 1325</p>
                    </div>
                    <h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

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
                <h6 class="text-uppercase mb-0">New Users</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-success"> +22% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Last : 3426</p>
                    </div>
                    <h5 class="m-0">3567<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

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
                <h6 class="text-uppercase mb-0">Average Price</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-danger"> -02% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Last : 15.8</p>
                    </div>
                    <h5 class="m-0">14.5<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5>

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
                <h6 class="text-uppercase mb-0">Total Sales</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-success"> +10% </span> <span class="ml-2 text-muted">From previous period</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Last : 14256</p>
                    </div>
                    <h5 class="m-0">15234<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Default Datatable</h4>
                <p class="text-muted m-b-30 font-14">
                    Data Data
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <a href="#" class="btn btn-outline-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>
                                <a href="#" class="btn btn-outline-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>
                                <a href="#" class="btn btn-outline-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>

@endsection