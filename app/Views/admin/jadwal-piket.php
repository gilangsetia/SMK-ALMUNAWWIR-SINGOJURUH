<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="color: #1e3a8a;">Jadwal Guru Piket</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPiket">
      <i class="fas fa-user-shield me-1"></i> Atur Piket Hari Ini
    </button>
  </div>

  <!-- Filter Bulan -->
  <div class="card mb-4">
    <div class="card-body">
      <form class="row g-3 align-items-end">
        <div class="col-md-3">
          <label class="form-label fw-medium">Pilih Bulan</label>
          <input type="month" class="form-control" value="<?= date('Y-m') ?>">
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-outline-primary w-100">Tampilkan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Kalender Piket -->
  <div class="card">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-user-shield me-2"></i>Jadwal Piket Bulan Ini
      </h5>
    </div>
    <div class="card-body">
      <!-- Kalender Header -->
      <div class="d-flex text-center mb-2">
        <div class="col fw-bold">Minggu</div>
        <div class="col fw-bold">Senin</div>
        <div class="col fw-bold">Selasa</div>
        <div class="col fw-bold">Rabu</div>
        <div class="col fw-bold">Kamis</div>
        <div class="col fw-bold">Jumat</div>
        <div class="col fw-bold">Sabtu</div>
      </div>

      <!-- Kalender Body (Contoh: November 2025) -->
      <div class="d-flex flex-wrap">
        <!-- Hari kosong sebelum 1 Nov (Sabtu) -->
        <div class="col text-center py-2 border"></div>
        <!-- 1 November (Minggu) -->
        <div class="col text-center py-2 border bg-light">1</div>
        <!-- 2 November (Senin) -->
        <div class="col text-center py-2 border">
          <div class="fw-bold">2</div>
          <div class="mt-1">
            <span class="badge bg-success">4</span>
          </div>
          <div class="small mt-1 text-muted">
            <div>Abdul Wahid</div>
            <div>Bu Siti</div>
            <div>Pak Budi</div>
            <div>Dr. Rina</div>
          </div>
        </div>
        <!-- 3 November (Selasa) -->
        <div class="col text-center py-2 border">
          <div class="fw-bold">3</div>
          <div class="mt-1">
            <span class="badge bg-warning text-dark">2</span>
          </div>
          <div class="small mt-1 text-muted">
            <div>Bu Siti</div>
            <div>Pak Arman</div>
          </div>
        </div>
        <!-- 4 November (Rabu) -->
        <div class="col text-center py-2 border">
          <div class="fw-bold">4</div>
          <div class="mt-1">
            <span class="badge bg-danger">1</span>
          </div>
          <div class="small mt-1 text-muted">
            <div>Dr. Rina</div>
          </div>
        </div>
        <!-- 5-30 November (disingkat) -->
        <?php for ($i = 5; $i <= 30; $i++): ?>
        <div class="col text-center py-2 border">
          <div><?= $i ?></div>
          <?php if ($i % 5 == 0): ?>
            <div class="mt-1">
              <span class="badge bg-success">3</span>
            </div>
          <?php endif; ?>
        </div>
        <?php endfor; ?>
        <!-- Hari setelah 30 Nov -->
        <div class="col text-center py-2 border"></div>
        <div class="col text-center py-2 border"></div>
      </div>

      <!-- Legenda -->
      <div class="mt-3">
        <div class="d-inline-block me-3">
          <span class="badge bg-success">4</span> = Cukup (≥2)
        </div>
        <div class="d-inline-block me-3">
          <span class="badge bg-warning text-dark">2</span> = Minimal
        </div>
        <div class="d-inline-block">
          <span class="badge bg-danger">1</span> = Kurang (peringatan)
        </div>
      </div>
    </div>
  </div>

  <!-- Tabel Ringkasan (Opsional) -->
  <div class="card mt-4">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-list me-2"></i>Daftar Hari dengan Piket
      </h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>Tanggal</th>
              <th>Hari</th>
              <th>Jumlah Piket</th>
              <th>Daftar Guru Piket</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>02 Nov 2025</td>
              <td>Senin</td>
              <td><span class="badge bg-success">4</span></td>
              <td>
                <span class="badge bg-light text-dark me-1">Abdul Wahid</span>
                <span class="badge bg-light text-dark me-1">Bu Siti</span>
                <span class="badge bg-light text-dark me-1">Pak Budi</span>
                <span class="badge bg-light text-dark">Dr. Rina</span>
              </td>
              <td class="text-center">
                <a href="#" class="btn btn-sm btn-outline-primary">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>03 Nov 2025</td>
              <td>Selasa</td>
              <td><span class="badge bg-warning text-dark">2</span></td>
              <td>
                <span class="badge bg-light text-dark me-1">Bu Siti</span>
                <span class="badge bg-light text-dark">Pak Arman</span>
              </td>
              <td class="text-center">
                <a href="#" class="btn btn-sm btn-outline-primary">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>04 Nov 2025</td>
              <td>Rabu</td>
              <td><span class="badge bg-danger">1</span></td>
              <td>
                <span class="badge bg-light text-dark">Dr. Rina</span>
              </td>
              <td class="text-center">
                <a href="#" class="btn btn-sm btn-outline-primary">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal: Atur Piket Hari Ini -->
  <div class="modal fade" id="modalPiket" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Atur Guru Piket – Selasa, 04 November 2025</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p class="text-muted mb-3">Pilih maksimal 6 guru untuk bertugas sebagai piket hari ini.</p>
          <form>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="piket1" checked>
                <label class="form-check-label" for="piket1">Abdul Wahid, ST</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="piket2" checked>
                <label class="form-check-label" for="piket2">Bu Siti, M.Pd</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="piket3">
                <label class="form-check-label" for="piket3">Pak Budi, SE</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="piket4">
                <label class="form-check-label" for="piket4">Dr. Rina, M.Si</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="piket5">
                <label class="form-check-label" for="piket5">Pak Arman</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="piket6">
                <label class="form-check-label" for="piket6">Bu Dina</label>
              </div>
            </div>
            <div class="alert alert-warning">
              <i class="fas fa-exclamation-triangle me-1"></i>
              Disarankan minimal 2 guru piket untuk antisipasi.
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Jadwal Piket</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 pt-3 border-top text-muted">
    &copy; <?= date('Y') ?> SMK Al-Munawwir Singojuruh | Sistem Absensi Terintegrasi
  </footer>
</div>

<?= $this->endSection() ?>