  <?php
  // jika halaman konten yang dipilih beranda, panggil file view beranda
  if ($_GET["page"] == "beranda") {
    include "modules/beranda/view.php";
  }
  // jika halaman konten yang dipilih barang, panggil file view karyawan
  elseif ($_GET["page"] == "data_karyawan") {
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
  // menampilkan gaji pokok
  elseif ($_GET["page"] == "gaji_pokok") {
    include "modules/gaji-pokok/view.php";
  }
  // menampilkan form gaji pokok
  elseif ($_GET["page"] == "add_gapok") {
    include "modules/gaji-pokok/form.php";
  }
  // menampilkan form edit gaji pokok
  elseif ($_GET["page"] == "edit_gapok") {
    include "modules/gaji-pokok/edit.php";
  }
  // menampilkan gaji karyawan
  elseif ($_GET["page"] == "gaji_karyawan") {
    include "modules/gaji-karyawan/view.php";
    // menampilkan gaji karyawan
  } elseif ($_GET["page"] == "add_gaji_karyawan") {
    include "modules/gaji-karyawan/form.php";
    // menampilkan Laporan data karyawan
  } elseif ($_GET["page"] == "lap_data_karyawan") {
    include "modules/laporan/lap-data-karyawan.php";
  }
  ?>