<?php
// Panggil database
require "database/function.php";
// memanggil query data_karyawan
$karyawan = view("SELECT * FROM data_karyawan")
    or die('Ada kesalahan pada query tampil Data karyawan: ' . mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>

<body>
    <!-- Content Header (Page header) -->
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
              Data Karyawan baru berhasil disimpan.
            </div>";
        }
        // jika alert = 2
        // tampilkan pesan Sukses "Data Karyawan berhasil diubah"
        elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data Karyawan berhasil diubah.
            </div>";
        }
        // jika alert = 3
        // tampilkan pesan Sukses "Data Karyawan berhasil dihapus"
        elseif ($_GET['alert'] == 3) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data Karyawan berhasil dihapus.
            </div>";
        }
        // jika alert = 4
        // tampilkan pesan Sukses "Data Karyawan gagal disimpan"
        elseif ($_GET['alert'] == 4) {
            echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data Karyawan gagal ditambahkan.
            </div>";
        }
        ?>
        <h1>Data Karyawan</h1>
        <div class="col text-right">
            <!-- Button trigger modal -->
            <a href="?page=add_karyawan&form=add" type="button" class="btn btn-primary" data-toggle="tooltip">
                <span><i class="fa fa-plus"></i></span> Tambah
            </a>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table2" class="table table-bordered table-hover display nowrap" cellspacing="0" style="width:100%">
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
                                        <th></th>
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
                                            <td class="center" width="120">
                                                <!-- Tombol Edit -->
                                                <a href="?page=edit_karyawan&form=edit&nik=<?= $row["nik"]; ?>" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip Content">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <!-- Tombol Hapus -->
                                                <a href="modules/data-karyawan/Proses.php?nik=<?= $row["nik"]; ?>" type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip Content" onclick="alert('Apakah anda yakin ingin menghapusnya?')">
                                                    <i class=" fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
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