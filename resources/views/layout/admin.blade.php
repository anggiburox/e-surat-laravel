<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>E- Surat</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png" />
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.theme.default.min.css') }}" />
    <link href="{{asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- Datatable -->
    <link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{asset('assets/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendor/pickadate/themes/default.date.css') }}">
</head>

<body>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/admin/dashboard" class="brand-logo">
                <span class="nav-text">E-Surat</span>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a href="/logout" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li>
                        <a href="/admin/dashboard" aria-expanded="false">
                            <i class="icon icon-app-store"></i>
                            <span class="nav-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="/admin/surat" aria-expanded="false">
                            <i class="fa fa-paper-plane"></i>
                            <span class="nav-text">Surat</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            < @yield('content') </div>
                <!--**********************************
            Content body end
        ***********************************-->

                <!--**********************************
            Footer start
        ***********************************-->
                <div class="footer bg-white">
                    <div class="copyright">
                        <p>
                            Copyright © <script>
                            document.write(new Date().getFullYear())
                            </script>
                        </p>
                    </div>
                </div>
                <!--**********************************
            Footer end
        ***********************************-->

                <!--**********************************
           Support ticket button start
        ***********************************-->

                <!--**********************************
           Support ticket button end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="{{asset('assets/vendor/global/global.min.js') }}"></script>
        <script src="{{asset('assets/js/quixnav-init.js') }}"></script>
        <script src="{{asset('assets/js/custom.min.js') }}"></script>

        <!-- Datatable -->
        <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{asset('assets/js/plugins-init/datatables.init.js') }}"></script>

        <!-- Vectormap -->
        <script src="{{asset('assets/vendor/raphael/raphael.min.js') }}"></script>
        <script src="{{asset('assets/vendor/morris/morris.min.js') }}"></script>

        <script src="{{asset('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>

        <script src="{{asset('assets/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

        <!--  flot-chart js -->
        <script src="{{asset('assets/vendor/flot/jquery.flot.js') }}"></script>
        <script src="{{asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>

        <!-- Owl Carousel -->
        <script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

        <!-- Counter Up -->
        <script src="{{asset('assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
        <script src="{{asset('assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
        <script src="{{asset('assets/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>

        <script src="{{asset('assets/js/dashboard/dashboard-1.js') }}"></script>
        <!-- pickdate -->
        <script src="{{asset('assets/vendor/pickadate/picker.js') }}"></script>
        <script src="{{asset('assets/vendor/pickadate/picker.time.js') }}"></script>
        <script src="{{asset('assets/vendor/pickadate/picker.date.js') }}"></script>
        <!-- Pickdate -->
        <script src="{{asset('assets/js/plugins-init/pickadate-init.js') }}"></script>
</body>

</html>