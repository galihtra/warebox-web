<?php 
?>
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #FF8642">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon ">
        <img src="../src/img/logo_loker_warebox.png" alt="Ikon" style="width: 50px; height: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">WareBox<sup></sup></div>
      </a>
      <hr class="sidebar-divider my-0">
      
            <!-- Divider -->

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Penyewaan Loker
      </div>
	  
	  <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="data_karyawan-index.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Akun Yang Terdaftar</span></a>
      </li>
	  
	  <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="data_absen-index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Sewa Loker</span></a>
      </li>
	  
	  <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="data_invalid-index.php">
          <i class="fas fa-fw fa-exclamation-triangle"></i>
          <span>Akun Invalid</span></a>
      </li>
	

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Rekap Absensi</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Harian</a>
            <a class="collapse-item" href="#">Bulanan</a>
            <a class="collapse-item" href="#">Tahunan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="https://www.youtube.com/@imamaris">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>YouTube</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>