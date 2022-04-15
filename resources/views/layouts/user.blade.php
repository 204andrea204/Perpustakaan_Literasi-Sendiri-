<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>User Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />


        <link rel="shortcut icon" href="/Vertical/assets/images/logo.png">

        <link rel="stylesheet" href="/fontawesome/font-awesome/css/all.css" />
        <link rel="stylesheet" href="/Vertical/css/custom.css" />
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
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                        
                        <a href="index.html" class="logo"><img src="/1logoan.png" height="35" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">USER</li>

                            <li>
                                <a href="/admin" class="waves-effect">
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Buku </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/dabuku">Daftar Buku</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i> <span> Artikel </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/artikel">Daftar Artikel</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

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

                                        <a class="dropdown-item" href="/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
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

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 <b>Drixo</b> <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                </footer>

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



        <!--Wysiwig js-->
        <script src="/vertical/assets/plugins/tinymce/tinymce.min.js"></script>

        <script>
            $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height:300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });
                }
            });
        </script>
    </body>
</html>