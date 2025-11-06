<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="color: #1e3a8a;">Jadwal Mengajar</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalJadwal">
      <i class="fas fa-plus me-1"></i> Tambah Jadwal
    </button>
  </div>

  <!-- Filter -->
  <div class="card mb-4">
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-3">
          <label class="form-label fw-medium">Kelas</label>
          <select class="form-select">
            <option>Semua Kelas</option>
            <option>X RPL 1</option>
            <option>X TKJ 1</option>
            <option>XI AKL 2</option>
            <option>XII DKV 1</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label fw-medium">Guru</label>
          <select class="form-select">
            <option>Semua Guru</option>
            <option>Abdul Wahid, ST</option>
            <option>Bu Siti, M.Pd</option>
            <option>Pak Budi, SE</option>
            <option>Dr. Rina, M.Si</option>
          </select>
        </div>
        <div class="col-md-2">
          <label class="form-label fw-medium">Hari</label>
          <select class="form-select">
            <option>Semua Hari</option>
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
            <option>Sabtu</option>
          </select>
        </div>
        <div class="col-md-2 d-flex align-items-end">
          <button type="submit" class="btn btn-outline-primary w-100">Terapkan</button>
        </div>
        <div class="col-md-2 d-flex align-items-end">
          <button type="button" class="btn btn-outline-secondary w-100" onclick="location.reload()">Reset</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Tabel Jadwal Mingguan -->
  <div class="card">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-calendar-alt me-2"></i>Jadwal Mengajar Minggu Ini
      </h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
          <thead class="table-light">
            <tr>
              <th style="min-width: 120px;">Jam</th>
              <th>Senin</th>
              <th>Selasa</th>
              <th>Rabu</th>
              <th>Kamis</th>
              <th>Jumat</th>
              <th>Sabtu</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-start fw-medium">07.00 – 08.30</td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">Matematika</div>
                  <div>X RPL 1</div>
                  <div class="text-muted small">Abdul Wahid, ST</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">B. Indonesia</div>
                  <div>X TKJ 1</div>
                  <div class="text-muted small">Bu Siti, M.Pd</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">Matematika</div>
                  <div>XI AKL 2</div>
                  <div class="text-muted small">Abdul Wahid, ST</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td class="bg-light">—</td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">Pemrograman</div>
                  <div>X RPL 1</div>
                  <div class="text-muted small">Pak Budi, SE</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td class="bg-light">—</td>
            </tr>
            <tr>
              <td class="text-start fw-medium">08.30 – 10.00</td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">Fisika</div>
                  <div>X RPL 1</div>
                  <div class="text-muted small">Dr. Rina, M.Si</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">Jaringan</div>
                  <div>XI TKJ 2</div>
                  <div class="text-muted small">Pak Arman</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">Akuntansi</div>
                  <div>XI AKL 2</div>
                  <div class="text-muted small">Pak Budi, SE</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td class="bg-light">—</td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">Basis Data</div>
                  <div>XI RPL 1</div>
                  <div class="text-muted small">Bu Dina</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td class="bg-light">—</td>
            </tr>
            <tr>
              <td class="text-start fw-medium">10.00 – 11.30</td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
            </tr>
            <tr>
              <td class="text-start fw-medium">13.00 – 14.30</td>
              <td>
                <div class="p-2 bg-light rounded">
                  <div class="fw-bold">Prak. RPL</div>
                  <div>X RPL 1</div>
                  <div class="text-muted small">Abdul Wahid, ST</div>
                  <div class="mt-1">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
              <td class="bg-light">—</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal: Tambah Jadwal -->
  <div class="modal fade" id="modalJadwal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Jadwal Mengajar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Hari</label>
                <select class="form-select" required>
                  <option value="">Pilih Hari</option>
                  <option>Senin</option>
                  <option>Selasa</option>
                  <option>Rabu</option>
                  <option>Kamis</option>
                  <option>Jumat</option>
                  <option>Sabtu</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Jam Pelajaran</label>
                <div class="input-group">
                  <input type="time" class="form-control" required>
                  <span class="input-group-text">s/d</span>
                  <input type="time" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Kelas</label>
                <select class="form-select" required>
                  <option value="">Pilih Kelas</option>
                  <option>X RPL 1</option>
                  <option>X TKJ 1</option>
                  <option>XI AKL 2</option>
                  <option>XII DKV 1</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Mata Pelajaran</label>
                <select class="form-select" required>
                  <option value="">Pilih Mapel</option>
                  <option>Matematika</option>
                  <option>Fisika</option>
                  <option>B. Indonesia</option>
                  <option>Akuntansi</option>
                  <option>Pemrograman</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Guru Pengajar</label>
                <select class="form-select" required>
                  <option value="">Pilih Guru</option>
                  <option>Abdul Wahid, ST</option>
                  <option>Bu Siti, M.Pd</option>
                  <option>Pak Budi, SE</option>
                  <option>Dr. Rina, M.Si</option>
                </select>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Jadwal</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 pt-3 border-top text-muted">
    &copy; <?= date('Y') ?> SMK Al-Munawwir Singojuruh | Sistem Absensi Terintegrasi
  </footer>
</div>

<?= $this->endSection() ?>