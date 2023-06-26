<?php
require "database/function.php";

$id_karyawan = $_GET["id_karyawan"];

$gk = viewSalaryKaryawan("SELECT * FROM gaji_karyawan WHERE id_karyawan = $id_karyawan")[0];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <section class="content-header">
        <h3>
            <i class="fas fa-edit"></i> Menambah Gaji Karyawan
        </h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <ol class="breadcrumb">
                <li><a href="?page=beranda"><i class="fa fa-home"></i> Beranda </a></li>
                <li><a href="?page=gaji_karyawan"> /Gaji Karyawan </a></li>
                <li class="active"> /Tambah </li>
            </ol>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="id_karyawan" id="id_karyawan" value="<?= $gk['id_karyawan']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $gk['nama']; ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>