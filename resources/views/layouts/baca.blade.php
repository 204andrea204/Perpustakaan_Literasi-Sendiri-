<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />


        <link rel="shortcut icon" href="/Vertical/assets/images/logo.png">

        <link rel="stylesheet" href="/fontawesome/font-awesome/css/all.css" />
        <link rel="stylesheet" href="/fontawesome/font-awesome/css/font-awesome.min.css" />

        <!-- DataTables -->
        <link href="/vertical/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/vertical/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="/vertical/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="/Vertical/assets/plugins/morris/morris.css">

        <link href="/Vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/Vertical/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/Vertical/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper" class="enlarged">


            

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">
                                
                                <a href="index.html" class="logo"><img src="/1logoan.png" height="35" alt="logo"></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                                    <form role="search" class="app-search">
                                        <div class="form-group mb-0"> 
                                            <input type="text" class="form-control" placeholder="Search..">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form> 
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <?php 
                                          $name = \App\User::where('id', Auth::user()->id)->first();
                                        ?>
                                        @if(empty($name->foto))
                                        <img alt="image" src="{{asset('vertical/assets/images/users/user-1.jpg')}}" class="rounded-circle mr-1">
                                        @else
                                        <img alt="image" src="{{asset('foto/user/'.$name->foto)}}" class="rounded-circle mr-1" style="width: 50px;height: 50px;">
                                        @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success mt-1 float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            
                        @yield("content")

                            

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> 
            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="/Vertical/assets/js/jquery.min.js"></script>
        <script src="/Vertical/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/Vertical/assets/js/modernizr.min.js"></script>
        <script src="/Vertical/assets/js/detect.js"></script>
        <script src="/Vertical/assets/js/fastclick.js"></script>
        <script src="/Vertical/assets/js/jquery.slimscroll.js"></script>
        <script src="/Vertical/assets/js/jquery.blockUI.js"></script>
        <script src="/Vertical/assets/js/waves.js"></script>
        <script src="/Vertical/assets/js/jquery.nicescroll.js"></script>
        <script src="/Vertical/assets/js/jquery.scrollTo.min.js"></script>

        <!-- skycons -->
        <script src="/Vertical/assets/plugins/skycons/skycons.min.js"></script>

        <!-- skycons -->
        <script src="/Vertical/assets/plugins/peity/jquery.peity..js"></script>

        <!--Morris Chart-->
        <script src="/Vertical/assets/plugins/morris/morris.min.js"></script>
        <script src="/Vertical/assets/plugins/raphael/raphael-min.js"></script>

        <!-- dashboard -->
        <script src="/Vertical/assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="/Vertical/assets/js/app.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="/vertical/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/jszip.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="/vertical/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="/vertical/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="/vertical/assets/pages/datatables.init.js"></script> 

    </body>
</html>