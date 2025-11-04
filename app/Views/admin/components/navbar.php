<!-- Navbar Fixed Top -->
<nav class="navbar navbar-expand">
  <div class="container-fluid d-flex align-items-center">
    <a class="navbar-brand d-flex align-items-center fw-bold" href="<?= base_url('admin/dashboard') ?>">
      <img src="<?= base_url('assets/logo.jpg') ?>" alt="Logo SMK Al-Munawwir" width="45" height="45" class="me-2">
      <div class="d-flex flex-column lh-1">
        <span style="color: #1e3a8a; font-weight: 700;">SMK Al-Munawwir</span>
        <small style="font-size: 0.75rem; color:grey;">Sistem Absensi Digital</small>
      </div>    
    </a>
    <div class="ms-auto d-flex align-items-center">
      <span class="text-muted me-3 d-none d-sm-inline"><?= date('l, d F Y') ?></span>
      <div class="dropdown">
        <a class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          <i class="fas fa-user-circle fs-4 me-2" style="color:#1e3a8a;"></i>
          <span>Admin</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Pengaturan</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-danger" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt me-2"></i> Keluar</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>