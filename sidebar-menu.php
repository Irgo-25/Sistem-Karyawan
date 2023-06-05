<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
    <?php
    }
    // jika menu Data Karyawan dipilih, menu Data Karyawam aktif
    if ($_GET["page"] == "data-karyawan") { ?>
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
    <?php
    } { ?>
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
      }
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
      // Jika Gaji Pokok tidak di pilih
      else { ?>
          <li class="nav-item">
            <a href="?page=gaji-pokok" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Gaji Pokok</p>
            </a>
          </li>
        <?php
      }
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
      // jika Gaji Karyawan di pilih 
      else { ?>
          <li class="nav-item">
            <a href="?page=gaji-karyawan" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Gaji Karyawan</p>
            </a>
          </li>
        </ul>
      </li>
    <?php
      }
    ?>
  </ul>
</nav>
<!-- /.sidebar-menu -->