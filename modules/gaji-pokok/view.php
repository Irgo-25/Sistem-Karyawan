<?php
require "database/function.php";

$gapok = viewSalary("SELECT * FROM gaji_pokok"); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="content-header">
        <?php
        // fungsi untuk menampilkan pesan
        // jika alert = "" (kosong)
        // tampilkan pesan "" (kosong)
        if (empty($_GET['alert'])) {
            echo "";
        }

        // jika alert = 1
        // tampilkan pesan Sukses "Data barang baru berhasil disimpan"
        elseif ($_GET['alert'] == 1) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Gaji Pokok berhasil disimpan.
            </div>";
        }
        // jika alert = 2
        // tampilkan pesan Sukses "Gaji Pokok berhasil diubah"
        elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Gaji Pokok berhasil diubah.
            </div>";
        }
        // jika alert = 3
        // tampilkan pesan Sukses "Gaji Pokok berhasil dihapus"
        elseif ($_GET['alert'] == 3) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Gaji Pokok berhasil dihapus.
            </div>";
        } elseif ($_GET['alert'] == 4) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Gaji Pokok Gagal di tambah.
            </div>";
        }
        ?>
        <h3>Gaji Pokok</h3>
        <div class="col text-right">
            <a href="?page=add_gapok" class="btn btn-primary justify-right" name="btn-gaji-pokok">tambah</a>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table1" class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th style="width: 40%; text-align:center;">Gaji Pokok</th>
                                        <th style="width: 40%; text-align:center;">Jabatan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($gapok as $gp) :  ?>
                                        <tr>
                                            <td>Rp. <?= $gp["gaji_utama"]; ?></td>
                                            <td><?= $gp["jabatan"]; ?></td>
                                            <td>
                                                <a href="?page=edit_gapok&form=edit&id_gapok=<?= $gp["id_gapok"]; ?>" type="button" class="btn btn-warning">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="modules/gaji-pokok/proses.php?id_gapok=<?= $gp["id_gapok"]; ?>" type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip Content" onclick="alert('Apakah anda yakin ingin menghapusnya?')">
                                                    <i class=" fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
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

</html>