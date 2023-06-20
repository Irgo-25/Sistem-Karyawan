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
        <?php
        // fungsi untuk menampilkan pesan
        // jika alert = "" (kosong)
        // tampilkan pesan "" (kosong)
        if (empty($_GET['alert'])) {
            echo "";
        }

        // jika alert = 1
        // tampilkan pesan Sukses "Gaji karyawab baru berhasil disimpan"
        elseif ($_GET['alert'] == 1) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Gaji karyawan berhasil disimpan.
            </div>";
        }
        // jika alert = 2
        // tampilkan pesan Sukses "Gaji karyawan berhasil diubah"
        elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Gaji karyawan berhasil diubah.
            </div>";
        }
        // jika alert = 3
        // tampilkan pesan Sukses "Gaji karyawan berhasil dihapus" 
        elseif ($_GET['alert'] == 3) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Gaji karyawan berhasil dihapus.
            </div>";
        }
        // jika alert = 4
        // tampilkan pesan Sukses "Gaji pokok dihapus"
        elseif ($_GET['alert'] == 4) {
            echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Gaji karyawan Gagal di tambah.
            </div>";
        }
        ?>
        <h3>Gaji Karyawan</h3>
        <div class="col text-right">
            <a href="?page=add_gaji_karyawan" class="btn btn-primary justify-right" name="btn-gaji-karyawan">tambah</a>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table2" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Nama</th>
                                        <th style="text-align: center;">Gaji Pokok</th>
                                        <th style="text-align: center;">Tunjangan</th>
                                        <th style="text-align: center;">Total Gaji</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>