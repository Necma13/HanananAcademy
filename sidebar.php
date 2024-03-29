<?php
$sidebarColor = '#3498db';
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: <?php echo $sidebarColor; ?>">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hananan Academy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $l_nama ?></a>
        </div>
      </div>
              <!-- Sidebar Menu -->
              <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="nav-icon fas fa-home" style="color: #ffffff;"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="siswa.php" class="nav-link">
                        <i class="nav-icon fa fa-id-card" style="color: #ffffff;"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pelajaran.php" class="nav-link">
                        <i class="nav-icon fas fa-list" style="color: #ffffff;"></i>
                        <p>Mata Pelajaran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pembayaran.php" class="nav-link">
                        <i class="nav-icon fas fa-money-bill" style="color: #ffffff;"></i>
                        <p>Pembayaran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="nilai.php" class="nav-link">
                        <i class="nav-icon fas fa-th" style="color: #ffffff;"></i>
                        <p>Nilai Siswa</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>