<!-- Sidebar — starts below navbar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <h6 class="text-uppercase fw-semibold opacity-80">Menu Utama</h6>
  </div>
  <ul class="nav flex-column px-2 mt-3">
    <li class="nav-item">
      <a class="nav-link <?= uri_string() == 'admin/dashboard' ? 'active' : '' ?>" href="<?= base_url('admin/dashboard') ?>">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <span class="nav-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= starts_with(uri_string(), 'admin/siswa') ? 'active' : '' ?>" href="<?= base_url('admin/siswa') ?>">
        <i class="fas fa-users nav-icon"></i>
        <span class="nav-text">Data Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= starts_with(uri_string(), 'admin/guru') ? 'active' : '' ?>" href="<?= base_url('admin/guru') ?>">
        <i class="fas fa-chalkboard-teacher nav-icon"></i>
        <span class="nav-text">Data Guru</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= starts_with(uri_string(), 'admin/kelas') ? 'active' : '' ?>" href="<?= base_url('admin/kelas') ?>">
        <i class="fas fa-door-open nav-icon"></i>
        <span class="nav-text">Kelas & Tahun Ajaran</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= starts_with(uri_string(), 'admin/qr') ? 'active' : '' ?>" href="<?= base_url('admin/qr') ?>">
        <i class="fas fa-qrcode nav-icon"></i>
        <span class="nav-text">QR Code Kelas/Guru</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= starts_with(uri_string(), 'admin/geolocation') ? 'active' : '' ?>" href="<?= base_url('admin/geolocation') ?>">
        <i class="fas fa-map-marker-alt nav-icon"></i>
        <span class="nav-text">Radius Geolocation</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= starts_with(uri_string(), 'admin/whatsapp') ? 'active' : '' ?>" href="<?= base_url('admin/whatsapp') ?>">
        <i class="fab fa-whatsapp nav-icon"></i>
        <span class="nav-text">WhatsApp Gateway</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= starts_with(uri_string(), 'admin/laporan') ? 'active' : '' ?>" href="<?= base_url('admin/laporan') ?>">
        <i class="fas fa-file-alt nav-icon"></i>
        <span class="nav-text">Laporan & Monitoring</span>
      </a>
    </li>
  </ul>

  <!-- Toggle inside sidebar -->
  <button id="sidebar-toggle" title="Collapse sidebar">
    <i class="fas fa-chevron-left"></i>
  </button>
</div>