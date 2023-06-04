   <?php
    //    panggil database
    require "database/function.php";
    // cek apabila tombol submit sudah di klik
    if (isset($_POST["submit"])) {
        if (add($_POST) > 0) {

            echo
            "<script>
            alert('Data Berhasil di tambahkan');
            document.location.href = 'main.php?page=data-karyawan';
            </script>";
        } else {
            echo
            "<script>
            alert('Data gagal di tambahkan');
            document.location.href = 'main.php?page=data-karyawan';
            </script>";
            mysqli_error($conn);
        }
    }
    ?>

   <section class="content-header">
       <h1>
           <i class="fas fa-edit"></i> Input Karyawan
       </h1>
       <div class="d-grid gap-2 d-md-flex justify-content-md-end">
           <ol class="breadcrumb">
               <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
               <li><a href="?module=data-karyawan"> /Data Karyawan </a></li>
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
                               <div class="form-group">
                                   <label for="Nomor Induk Karyawan">NIK</label>
                                   <input type="number" class="form-control" name="nik" id="nik" placeholder="Nomor Induk Karyawan" required>
                               </div>
                               <div class="form-group">
                                   <label for="Nama Lengkap">Nama Lengkap</label>
                                   <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                               </div>
                               <div class="form-group">
                                   <label for="umur">Umur</label>
                                   <input type="text" class="form-control" name="umur" id="umur" placeholder="umur" required>
                               </div>
                               <div class="form-group">
                                   <label for="dept">Departement</label>
                                   <select class="form-select" name="dept" id="dept" aria-label=" Floating label disabled select example">
                                       <option value=""></option>
                                       <option value="Accounting">Accounting</option>
                                       <option value="IT">IT</option>
                                       <option value="GA">GA</option>
                                       <option value="HRD">HRD</option>
                                   </select>
                               </div>
                               <div class="form-group">
                                   <label for="posisi">Posisi</label>
                                   <select class="form-select" name="posisi" id="posisi" aria-label=" Floating label disabled select example">
                                       <option value=""></option>
                                       <option value="Manajer">Manajer</option>
                                       <option value="Supervisor">Supervisor</option>
                                       <option value="Staff">Staff</option>
                                   </select>
                               </div>
                               <div class="form-group">
                                   <label for="alamat">Alamat</label>
                                   <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                               </div>
                               <div class="form-group">
                                   <label for="tanggal_masuk">Tanggal Masuk</label>
                                   <input type="date" class="form-control date-picker" date date-format="d F Y" name="tanggal_masuk" id="tanggal_masuk" placeholder="tanggal masuk">
                               </div>
                               <div class="modal-footer">
                                   <button type="submit" name="submit" class="btn btn-primary" onclick="swal('Data Karyawan', 'Berhasil di Simpan', '')">Submit</button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>