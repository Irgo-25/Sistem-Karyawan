<?php
// Panggil database
include "database/function.php";
// memanggil query data_karyawan
$karyawan = view("SELECT * FROM data_karyawan")
    or die('Ada kesalahan pada query tampil Data karyawan: ' . mysqli_error($conn));
//Fungsi Hapus Data

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="table3" class="table table-bordered table-hover display nowrap" cellspacing="0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Departement</th>
                                    <th>Jabatan</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Masuk</th>
                                </tr>
                            </thead>
                            <tbody class="border-dark">
                                <?php $No = 1; ?>
                                <?php foreach ($karyawan as $row) : ?>
                                    <tr>
                                        <td><?= $No ?></td>
                                        <td><?= $row["nik"]; ?></td>
                                        <td><?= $row["nama"]; ?></td>
                                        <td><?= $row["umur"]; ?></td>
                                        <td><?= $row["dept"]; ?></td>
                                        <td><?= $row["jabatan"]; ?></td>
                                        <td><?= $row["alamat"]; ?></td>
                                        <td><?= $row["tanggal_masuk"]; ?></td>
                                    </tr>
                                    <?php $No++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>