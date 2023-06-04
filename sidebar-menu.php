      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
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
          }
          // jika menu Data Karyawan dipilih, menu Data Karyawam aktif
          if ($_GET["page"] == "penggajian") { ?>
            <li class="nav-item">
              <a href="?page=penggajian" class="nav-link">
                <i class="fa-solid fa-sack-dollar"></i>
                <p>
                  Penggajian
                </p>
              </a>
            </li>
          <?php
          }
          // jika tidak, menu home tidak aktif
          else { ?>
            <li class="nav-item">
              <a href="?page=penggajian" class="nav-link">
                <i class="fa-solid fa-sack-dollar"></i>
                <p>
                  Penggajian
                </p>
              </a>
            </li>
          <?php
          }
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->