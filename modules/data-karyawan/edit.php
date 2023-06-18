<?php
//    panggil database
require "database/function.php";

$nik = $_GET["nik"];

$data = view("SELECT * FROM data_karyawan WHERE nik= $nik")[0];

// cek apabila tombol submit sudah di klik
if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo
        "<script>
            document.location.href = 'main.php?page=data_karyawan&alert=2';
            </script>";
    } else {
        echo
        "<script>
            document.location.href = 'main.php?page=data_karyawan&alert=4';
            </script>";
        mysqli_error($conn);
    }
}
?>
<section class="content-header">
    <h1>
        <i class="fas fa-edit"></i> Edit Karyawan
    </h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <ol class="breadcrumb">
            <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
            <li><a href="?module=data-karyawan"> / Data Karyawan </a></li>
            <li class="active"> / Edit </li>
        </ol>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_karyawan" id="id_karyawan" required value="<?= $data['id_karyawan']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nomor Induk Karyawan</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nik" autocomplete="off" required value="<?= $data['nik']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Nama Lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required value="<?= $data['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="text" class="form-control" name="umur" id="umur" placeholder="umur" required value="<?= $data['umur']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="dept">Departement</label>
                                <select class="form-select" name="dept" id="dept" aria-label=" Floating label disabled select example">
                                    <option value="<?= $data['dept']; ?>"><?= $data['dept']; ?></option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="IT">IT</option>
                                    <option value="GA">GA</option>
                                    <option value="HRD">HRD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jabatan">jabatan</label>
                                <select class="form-select" name="jabatan" id="jabatan" aria-label=" Floating label disabled select example">
                                    <option value="<?= $data['jabatan']; ?>"><?= $data['jabatan']; ?></option>
                                    <option value="Manajer">Manajer</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required value="<?= $data['alamat']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_masuk">Tanggal Masuk</label>
                                <input type="date" class="form-control date-picker" date date-format="d F Y" name="tanggal_masuk" id="tanggal_masuk" placeholder="tanggal masuk" value="<?= $data['tanggal_masuk']; ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>