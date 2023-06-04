<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCF|SIK</title>
    <!-- Data Table -->
    <link rel="stylesheet" href="assets/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/datatables.net-searchpanes-bs4/css/searchPanes.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <!-- adminLTE -->
    <link rel="stylesheet" href="assets/style/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome6/css/all.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <div class="row justify-content-around">
                    <div class="col-4">
                        <img src="assets/img/logo.png" alt="NCF Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    </div>
                    <div class="col-4">
                        <span class="brand-text font-weight-light">NCF</span>
                    </div>
                </div>
            </a>

            <!-- Sidebar -->
            <!-- Sidebar Menu -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!-- panggil file "sidebar-menu.php" untuk menampilkan menu -->
                    <?php include_once "sidebar-menu.php" ?>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
        </aside>
        <!-- /.sidebar -->
        <div class="content-wrapper">
            <!-- panggil file "content-menu.php" untuk menampilkan content -->
            <?php include_once "content.php" ?>
        </div><!-- /.content-wrapper -->
    </div>
    <!-- JQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Data Table JS -->
    <script src="assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FontAwesome -->
    <script src="assets/fontawesome6/js/all.min.js"></script>
    <!-- JS AdminLTE -->
    <script src="assets/style/adminlte.js"></script>
    <!-- Sweet Alert Js -->
    <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- Panggil data table -->
    <script>
        $("#table1").dataTable();
        $('#table2').dataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>
</body>

</html>