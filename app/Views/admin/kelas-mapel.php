<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="color: #1e3a8a;">Kelas & Mata Pelajaran</h1>
    <div>
      <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modalKelas">
        <i class="fas fa-door-open me-1"></i> Tambah Kelas
      </button>
      <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalMapel">
        <i class="fas fa-book me-1"></i> Tambah Mapel
      </button>
    </div>
  </div>

  <div class="row g-4">
    <!-- Kolom Kelas -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h5 style="color: #1e3a8a; font-weight:700;">
            <i class="fas fa-door-open me-2"></i>Daftar Kelas
          </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-light">
                <tr>
                  <th>Kelas</th>
                  <th>Tingkat</th>
                  <th>Jurusan</th>
                  <th>Wali Kelas</th>
                  <th class="text-center">Siswa</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>X RPL 1</td>
                  <td>10</td>
                  <td>Rekayasa Perangkat Lunak</td>
                  <td>Abdul Wahid, ST</td>
                  <td class="text-center">32</td>
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
                  <td>X TKJ 1</td>
                  <td>10</td>
                  <td>Teknik Komputer & Jaringan</td>
                  <td>Bu Siti, M.Pd</td>
                  <td class="text-center">30</td>
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
                  <td>XI AKL 2</td>
                  <td>11</td>
                  <td>Akuntansi & Keuangan Lembaga</td>
                  <td>Pak Budi, SE</td>
                  <td class="text-center">28</td>
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
    </div>

    <!-- Kolom Mata Pelajaran -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h5 style="color: #1e3a8a; font-weight:700;">
            <i class="fas fa-book me-2"></i>Daftar Mata Pelajaran
          </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-light">
                <tr>
                  <th>Kode</th>
                  <th>Mata Pelajaran</th>
                  <th>Guru Pengampu</th>
                  <th class="text-center">Kelas Terkait</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>MTX10</td>
                  <td>Matematika</td>
                  <td>Abdul Wahid, ST</td>
                  <td class="text-center">3</td>
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
                  <td>FIS10</td>
                  <td>Fisika</td>
                  <td>Dr. Rina, M.Si</td>
                  <td class="text-center">1</td>
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
                  <td>AKT11</td>
                  <td>Akuntansi</td>
                  <td>Pak Budi, SE</td>
                  <td class="text-center">2</td>
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
    </div>
  </div>

  <!-- Modal: Tambah Kelas -->
  <div class="modal fade" id="modalKelas" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Kelas Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Nama Kelas (contoh: X RPL 1)</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label class="form-label">Tingkat</label>
                <select class="form-select">
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Jurusan</label>
                <select class="form-select">
                  <option>Rekayasa Perangkat Lunak</option>
                  <option>Teknik Komputer & Jaringan</option>
                  <option>Akuntansi & Keuangan Lembaga</option>
                  <option>Desain Komunikasi Visual</option>
                </select>
              </div>
            </div>
            <div class="mb-3 mt-3">
              <label class="form-label">Wali Kelas</label>
              <select class="form-select">
                <option>Abdul Wahid, ST</option>
                <option>Bu Siti, M.Pd</option>
                <option>Pak Budi, SE</option>
                <option>Dr. Rina, M.Si</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Kelas</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Tambah Mapel -->
  <div class="modal fade" id="modalMapel" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Mata Pelajaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Kode Mapel (contoh: MTX10)</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Nama Mata Pelajaran</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Guru Pengampu</label>
              <select class="form-select">
                <option>Abdul Wahid, ST</option>
                <option>Bu Siti, M.Pd</option>
                <option>Pak Budi, SE</option>
                <option>Dr. Rina, M.Si</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Mapel</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 pt-3 border-top text-muted">
    &copy; <?= date('Y') ?> SMK Al-Munawwir Singojuruh | Sistem Absensi Terintegrasi
  </footer>
</div>

<?= $this->endSection() ?>