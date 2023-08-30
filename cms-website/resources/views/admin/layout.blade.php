<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>AdminLTE 3 | Dashboard</title>
    <!------------------------------------------------------------->




<!-------------------------------------------------------------->
    <!-- Bootstrap cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin_theme/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin_theme/adminlte/plugins/tempusdominus-bootstrap-4/css/te)mpusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet"
        href="{{ asset('admin_theme/adminlte/plugins/icheck-bootstrap/icheck-bootstra)p.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin_theme/adminlte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- T)heme style -->
    <link rel="stylesheet" href="{{ asset('admin_theme/adminlte/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('admin_theme/adminlte/plugins/overlayScrollbars/css/OverlayScr)ollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin_theme/adminlte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin_theme/adminlte/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper" >

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin_theme/adminlte/dist/img/AdminLTELogo.png') }}"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('page-add')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('admin.contact.show')}}" class="nav-link">Users</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-------------------------------------------- Main Sidebar----------------------------------------------------------------------->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ asset('admin_theme/adminlte/index3.html') }}" class="brand-link">
                <img src="{{ asset('admin_theme/adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin TOP APPS</span>
            </a>

            <!-- Sidebar -->
            <div class="">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open" >
                            <a href="#" class="nav-link active">
                            <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('page-add')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تعديل العناوين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('post.show.home')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تعديل جميع الاقسام</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">

                                <p>
                                    Company
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('company.page.add')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تعديل العناوين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('post-show-company')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تعديل جميع الاقسام</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">

                                <p>
                                    Services
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('services.page.add')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تعديل العناوين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('post-show-service')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تعديل جميع الاقسام</p>
                                    </a>
                                </li>
                            </ul>
                            

                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{route('post-show')}}" class="nav-link active">

                                <p>
                                    تعديل الكل
                                    <!--<i class="right fas fa-angle-left"></i> عباره عن رمز "" -->
                                </p>
                            </a>

                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{route('admin.contact.show')}}" class="nav-link active">

                                <p>
                                   جميع المستخدمين
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-------------------------------------------- Content----------------------------------------------------------------------->

        <div class="container">
            @yield('content')
        </div>

        <!--------------------------------------------footer ----------------------------------------------------------------------->

        <!-- /.content-wrapper -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->



    <!-- jQuery -->
    <script src="{{ asset('admin_theme/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin_theme/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin_theme/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin_theme/adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin_theme/adminlte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin_theme/adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin_theme/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin_theme/adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin_theme/adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin_theme/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="{{ asset('admin_theme/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('admin_theme/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin_theme/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin_theme/adminlte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin_theme/adminlte/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin_theme/adminlte/dist/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('\ckeditor\samples\js\sample.js') }}"></script>
    <script src="{{ asset('\ckeditor\ckeditor.js') }}"></script>




    @stack('footer-scripts')
</body>

</html>
