  <?php
  // jika halaman konten yang dipilih beranda, panggil file view beranda
  if ($_GET["page"] == "beranda") {
    include "modules/beranda/view.php";
  }
  // jika halaman konten yang dipilih barang, panggil file view karyawan
  elseif ($_GET["page"] == "data-karyawan") {
    include "modules/data-karyawan/view.php";
  }
  // menampilkan form tambah karyawan
  elseif ($_GET["page"] == "add_karyawan") {
    include "modules/data-karyawan/form.php";
  }
  // menampilkan form edit karyawan
  elseif ($_GET["page"] == "edit_karyawan") {
    include "modules/data-karyawan/edit.php";
  }
  ?>