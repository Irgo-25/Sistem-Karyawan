<?php
include "database/function.php";
$id_gapok = $_GET["id_gapok"];

$gp = view("SELECT * FROM gaji_pokok WHERE id_gapok=$id_gapok")[0];

if (isset($_POST["submit"])) {
    if (addGapok($_POST) > 0) {
        echo
        "<script>
            document.location.href = 'main.php?page=gaji_pokok&alert=2';
            </script>";
    } else {
        echo
        "<script>
            document.location.href = 'main.php?page=gaji_pokok&alert=4';
            </script>";
        mysqli_error($conn);
    }
}
?>

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
        <h2>
            <i class="fas fa-edit"></i> Edit Gaji Pokok
        </h2>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <ol class="breadcrumb">
                <li><a href="?page=beranda"><i class="fa fa-home"></i> Beranda </a></li>
                <li><a href="?page=gaji-pokok"> /Gaji Pokok </a></li>
                <li class="active"> /Tambah </li>
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
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_gapok" id="id_gapok" required value="<?= $gp['id_gapok']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="gapok">Gaji Pokok</label>
                                        <input type="text" class="form-control" name="gaji_utama" id="gaji_utama" placeholder=" Masukan Nominal Gaji Pokok" value="<?= $gp["gaji_utama"]; ?>">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <select class="form-select" name="jabatan" id="jabatan" aria-label=" Floating label disabled select example" value="<?= $gp["jabatan"]; ?>">
                                            <option value="<?= $gp["jabatan"]; ?>"><?= $gp["jabatan"]; ?></option>
                                            <option value="Manajer">Manajer</option>
                                            <option value="Supervisor">Supervisor</option>
                                            <option value="Staff">Staff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>



</body>

</html>