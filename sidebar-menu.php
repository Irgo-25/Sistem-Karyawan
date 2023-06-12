<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <!-- Sidebar Menu -->
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <?php
        // fungsi untuk pengecekan menu aktif
        // jika menu beranda dipilih, menu beranda aktif
        if ($_GET["page"] == "beranda") { ?>
          <li class="nav-item">
            <a href="?page=beranda" class="nav-link">
              <i class="fa fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
        <?php
        }
        // jika tidak, menu home tidak aktif
        else { ?>
          <li class="nav-item">
            <a href="?page=beranda" class="nav-link">
              <i class="fa fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
        <?php } ?>
        <?php
        // fungsi untuk pengecekan menu aktif
        // jika menu beranda dipilih, menu beranda aktif
        if ($_GET["page"] == "data-karyawan" || $_GET["page"] == "add-karyawan") { ?>
          <li class="nav-item">
            <a href="?page=data-karyawan" class="nav-link">
              <i class="fa fa-address-card"></i>
              <p>
                Data Karyawan
              </p>
            </a>
          </li>
        <?php
        }
        // jika tidak, menu home tidak aktif
        else { ?>
          <li class="nav-item">
            <a href="?page=data-karyawan" class="nav-link">
              <i class="fa fa-address-card"></i>
              <p>
                Data Karyawan
              </p>
            </a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-sack-dollar fa-bounce"></i>
            <p>
              Penggajian
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <?php
            // jika page gaji pokok di pilih
            if ($_GET["page"] == "gaji-pokok") { ?>
              <li class="nav-item">
                <a href="?page=gaji-pokok" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Pokok</p>
                </a>
              </li>
            <?php
            }
            // jika tidak, menu home tidak aktif
            else { ?>
              <li class="nav-item">
                <a href="?page=gaji-pokok" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Pokok</p>
                </a>
              </li>
            <?php } ?>
            <?php
            // jika Gaji Karyawan di pilih
            if ($_GET["page"] == "gaji-karyawan") { ?>
              <li class="nav-item">
                <a href="?page=gaji-karyawan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Karyawan</p>
                </a>
              </li>
            <?php
            }
            // jika tidak, menu home tidak aktif
            else { ?>
              <li class="nav-item">
                <a href="?page=gaji-karyawan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Karyawan</p>
                </a>
              </li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-folder"></i>
            <p>
              Laporan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <?php
            // jika page gaji pokok di pilih
            if ($_GET["page"] == "lap-data-karyawan") { ?>
              <li class="nav-item">
                <a href="?page=lap-data-karyawan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data Karyawam</p>
                </a>
              </li>
            <?php
            }
            // jika tidak, menu home tidak aktif
            else { ?>
              <li class="nav-item">
                <a href="?page=lap-data-karyawan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data Karyawam</p>
                </a>
              </li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  <!-- /.sidebar-menu -->
</body>

</html>