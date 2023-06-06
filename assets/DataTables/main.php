<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NCF|SIK</title>
    <!-- Data Table -->
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="assets/DataTables/DateTime-1.4.1/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" href="assets/DataTables/Responsive-2.4.1/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/DataTables/SearchPanes-2.1.2/css/searchPanes.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/DataTables/Select-1.6.2/css/select.bootstrap5.min.css">
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
                        <img src="assets/img/logo.png" alt="NCFLogo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
    <script src="assets/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <!-- Data Table JS -->
    <script src="assets/DataTables/DataTables-1.13.4/js/dataTables.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/DataTables/Buttons-2.3.6/js/buttons.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/DataTables/DateTime-1.4.1/js/dataTables.dateTime.min.js" type="text/javascript"></script>
    <script src="assets/DataTables/Responsive-2.4.1/js/responsive.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/DataTables/SearchPanes-2.1.2/js/searchPanes.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/DataTables/Select-1.6.2/js/select.dataTables.min.js" type="text/javascript"></script>
    <!-- <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <!-- FontAwesome -->
    <script src="assets/fontawesome6/js/all.min.js" type="text/javascript"></script>
    <!-- JS AdminLTE -->
    <script src="assets/style/adminlte.js" type="text/javascript"></script>
    <!-- Sweet Alert Js -->
    <script src="assets/sweetalert2/dist/sweetalert2.all.min.js" type="text/javascript"></script>
    <!-- Panggil data table -->
    <script type="text/javascript">
        // $("#table1").dataTable({
        //     "paging": true,
        //     "lengthChange": true,
        //     "searching": true,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": true,
        //     "responsive": true
        // });
        $.ready(function() {
            $('#grdPrUpPrj').DataTable()({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });

        });
    </script>
</body>

</html>