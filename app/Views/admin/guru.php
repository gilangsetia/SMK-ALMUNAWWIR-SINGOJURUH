<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="color: #1e3a8a;">Data Guru</h1>
    <a href="#" class="btn btn-primary">
      <i class="fas fa-plus me-1"></i> Tambah Guru
    </a>
  </div>

  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card stat-card stat-card-blue">
        <div class="card-body text-center py-3">
          <h3 class="fw-bold mb-1">28</h3>
          <small class="opacity-80">Total Guru Aktif</small>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-chalkboard-teacher me-2"></i>Daftar Guru
      </h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th width="5%">No</th>
              <th>NIP</th>
              <th>Nama Guru</th>
              <th>Email</th>
              <th>No. HP</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1980123456</td>
              <td>Abdul Wahid, ST</td>
              <td>abdul@email.com</td>
              <td>0812-3456-7890</td>
              <td class="text-center">
                <a href="#" class="btn btn-sm btn-outline-primary me-1">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-sm btn-outline-danger">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>1985654321</td>
              <td>Bu Siti, M.Pd</td>
              <td>siti@email.com</td>
              <td>0813-4567-8901</td>
              <td class="text-center">
                <a href="#" class="btn btn-sm btn-outline-primary me-1">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-sm btn-outline-danger">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>1990112233</td>
              <td>Pak Budi, SE</td>
              <td>budi@email.com</td>
              <td>0814-5678-9012</td>
              <td class="text-center">
                <a href="#" class="btn btn-sm btn-outline-primary me-1">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-sm btn-outline-danger">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 pt-3 border-top text-muted">
    &copy; <?= date('Y') ?> SMK Al-Munawwir Singojuruh | Sistem Absensi Terintegrasi
  </footer>
</div>

<?= $this->endSection() ?>