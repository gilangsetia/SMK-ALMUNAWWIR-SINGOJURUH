<!-- Sidebar — starts below navbar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <h6 class="text-uppercase fw-semibold opacity-80" style="text-align: center;">Menu Utama</h6>
  </div>

  <ul class="nav flex-column px-2 mt-3">
    <!-- Dashboard -->
    <li class="nav-item">
      <a class="nav-link <?= uri_string() == 'admin/dashboard' ? 'active' : '' ?>" 
         href="<?= base_url('admin/dashboard') ?>">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <span class="nav-text">Dashboard</span>
      </a>
    </li>

    <!-- Master Data (Dropdown) -->
    <?php
    $currentUri = uri_string();
    $isGuruOrSiswa = ($currentUri == 'admin/guru' || $currentUri == 'admin/siswa');
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= $isGuruOrSiswa ? '' : 'collapsed' ?>" 
         href="#masterDataSubmenu" 
         data-bs-toggle="collapse" 
         data-bs-target="#masterDataSubmenu" 
         aria-expanded="<?= $isGuruOrSiswa ? 'true' : 'false' ?>">
        <i class="fas fa-database nav-icon"></i>
        <span class="nav-text">Master Data</span>
        <i class="fas fa-chevron-right ms-auto"></i>
      </a>
      <div class="collapse <?= $isGuruOrSiswa ? 'show' : '' ?>" id="masterDataSubmenu">
        <ul class="nav flex-column ms-4 mt-1 mb-2">
          <li class="nav-item">
            <a class="nav-link <?= $currentUri == 'admin/guru' ? 'active' : '' ?>" 
               href="<?= base_url('admin/guru') ?>">
              <i class="fas fa-chalkboard-teacher submenu-icon"></i>
              <span class="nav-text">Data Guru</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $currentUri == 'admin/murid' ? 'active' : '' ?>" 
               href="<?= base_url('admin/murid') ?>">
              <i class="fas fa-user-graduate submenu-icon"></i>
              <span class="nav-text">Data Murid</span>
            </a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Kelas & Mapel -->
    <li class="nav-item">
      <a class="nav-link <?= uri_string() == 'admin/kelas-mapel' ? 'active' : '' ?>" 
         href="<?= base_url('admin/kelas-mapel') ?>">
        <i class="fas fa-door-open nav-icon"></i>
        <span class="nav-text">Kelas & Mapel</span>
      </a>
    </li>

    <!-- Jadwal Mengajar -->
    <li class="nav-item">
      <a class="nav-link <?= uri_string() == 'admin/jadwal-mengajar' ? 'active' : '' ?>" 
         href="<?= base_url('admin/jadwal-mengajar') ?>">
        <i class="fas fa-calendar-alt nav-icon"></i>
        <span class="nav-text">Jadwal Mengajar</span>
      </a>
    </li>

    <!-- Jadwal Guru Piket -->
    <li class="nav-item">
      <a class="nav-link <?= uri_string() == 'admin/jadwal-piket' ? 'active' : '' ?>" 
         href="<?= base_url('admin/jadwal-piket') ?>">
        <i class="fas fa-user-shield nav-icon"></i>
        <span class="nav-text">Jadwal Guru Piket</span>
      </a>
    </li>

    <!-- Pengaturan (Dropdown) -->
    <?php
    $isGeoOrWa = ($currentUri == 'admin/geolocation' || $currentUri == 'admin/whatsapp');
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= $isGeoOrWa ? '' : 'collapsed' ?>" 
         href="#pengaturanSubmenu" 
         data-bs-toggle="collapse" 
         data-bs-target="#pengaturanSubmenu" 
         aria-expanded="<?= $isGeoOrWa ? 'true' : 'false' ?>">
        <i class="fas fa-cog nav-icon"></i>
        <span class="nav-text">Pengaturan</span>
        <i class="fas fa-chevron-right ms-auto"></i>
      </a>
      <div class="collapse <?= $isGeoOrWa ? 'show' : '' ?>" id="pengaturanSubmenu">
        <ul class="nav flex-column ms-4 mt-1 mb-2">
          <li class="nav-item">
            <a class="nav-link <?= $currentUri == 'admin/geolocation' ? 'active' : '' ?>" 
               href="<?= base_url('admin/geolocation') ?>">
              <i class="fas fa-map-marker-alt submenu-icon"></i>
              <span class="nav-text">Radius Geolocation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $currentUri == 'admin/whatsapp' ? 'active' : '' ?>" 
               href="<?= base_url('admin/whatsapp') ?>">
              <i class="fab fa-whatsapp submenu-icon"></i>
              <span class="nav-text">Notifikasi WhatsApp</span>
            </a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Laporan & Monitoring -->
    <li class="nav-item">
      <a class="nav-link <?= uri_string() == 'admin/laporan' ? 'active' : '' ?>" 
         href="<?= base_url('admin/laporan') ?>">
        <i class="fas fa-file-alt nav-icon"></i>
        <span class="nav-text">Laporan & Monitoring</span>
      </a>
    </li>
  </ul>

  <!-- Toggle Button di Bawah Menu -->
  <div class="sidebar-footer mt-auto pt-3 pb-4 px-3">
    <button id="sidebar-toggle" class="btn btn-toggle d-flex align-items-center justify-content-center" title="Collapse sidebar">
      <i class="fas fa-chevron-left"></i>
    </button>
  </div>
</div>