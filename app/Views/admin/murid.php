<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="color: #1e3a8a;">Data Siswa</h1>
    <div>
      <a href="#" class="btn btn-primary me-2">
        <i class="fas fa-plus me-1"></i> Tambah Siswa
      </a>
      <a href="#" class="btn btn-outline-secondary">
        <i class="fas fa-file-excel me-1"></i> Impor Excel
      </a>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card stat-card stat-card-green">
        <div class="card-body text-center py-3">
          <h3 class="fw-bold mb-1">480</h3>
          <small class="opacity-80">Total Siswa</small>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stat-card stat-card-gray">
        <div class="card-body text-center py-3">
          <h3 class="fw-bold mb-1">12</h3>
          <small class="opacity-80">Jumlah Kelas</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Filter -->
  <div class="card mb-4">
    <div class="card-body">
      <form>
        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label fw-medium">Kelas</label>
            <select class="form-select">
              <option>Semua Kelas</option>
              <option>X RPL 1</option>
              <option>X TKJ 1</option>
              <option>XI AKL 2</option>
            </select>
          </div>
          <div class="col-md-5">
            <label class="form-label fw-medium">Cari Nama atau NIS</label>
            <input type="text" class="form-control" placeholder="Ketik nama atau NIS...">
          </div>
          <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-outline-primary me-2">Filter</button>
            <button type="button" class="btn btn-outline-secondary">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Tabel Siswa -->
  <div class="card">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-user-graduate me-2"></i>Daftar Siswa
      </h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th width="5%">No</th>
              <th>NIS</th>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Orang Tua</th>
              <th>No. WA Ortu</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>820002.4.21</td>
              <td>Ahmad Abdul Alfaredzki</td>
              <td>X RPL 1</td>
              <td>Bpk. Ali</td>
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
              <td>820004.4.21</td>
              <td>Ahmad Maulana</td>
              <td>X RPL 1</td>
              <td>Ibu Siti</td>
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
              <td>827003.4.21</td>
              <td>Arslan Ambul Fatoni</td>
              <td>X TKJ 1</td>
              <td>Bpk. Arman</td>
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