<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="color: #1e3a8a;">Laporan & Monitoring</h1>
    <div>
      <button class="btn btn-outline-secondary me-2">
        <i class="fas fa-file-excel me-1"></i> Ekspor Excel
      </button>
      <button class="btn btn-outline-secondary">
        <i class="fas fa-print me-1"></i> Cetak PDF
      </button>
    </div>
  </div>

  <!-- Filter -->
  <div class="card mb-4">
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-3">
          <label class="form-label fw-medium">Jenis Laporan</label>
          <select class="form-select" id="jenisLaporan">
            <option value="guru">Absensi Guru</option>
            <option value="siswa" selected>Absensi Siswa</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label fw-medium">Periode</label>
          <select class="form-select">
            <option>Hari Ini</option>
            <option>Minggu Ini</option>
            <option selected>Bulan Ini</option>
            <option>Kustom</option>
          </select>
        </div>
        <div class="col-md-3" id="filterKelas" style="display: block;">
          <label class="form-label fw-medium">Kelas</label>
          <select class="form-select">
            <option>Semua Kelas</option>
            <option>X RPL 1</option>
            <option>X TKJ 1</option>
            <option>XI AKL 2</option>
            <option>XII DKV 1</option>
          </select>
        </div>
        <div class="col-md-3 d-flex align-items-end">
          <button type="submit" class="btn btn-primary w-100">Tampilkan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Statistik Ringkasan -->
  <div class="row g-4 mb-4">
    <div class="col-md-3">
      <div class="card stat-card stat-card-blue">
        <div class="card-body d-flex justify-content-between align-items-start">
          <div>
            <h6 class="mb-1 opacity-90">Kehadiran Guru</h6>
            <h3 class="fw-bold mb-0">88.9%</h3>
            <small class="opacity-75">Bulan ini</small>
          </div>
          <i class="fas fa-chalkboard-teacher fa-2x opacity-80"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stat-card stat-card-green">
        <div class="card-body d-flex justify-content-between align-items-start">
          <div>
            <h6 class="mb-1 opacity-90">Kehadiran Siswa</h6>
            <h3 class="fw-bold mb-0">85.2%</h3>
            <small class="opacity-75">Bulan ini</small>
          </div>
          <i class="fas fa-user-graduate fa-2x opacity-80"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stat-card stat-card-orange">
        <div class="card-body d-flex justify-content-between align-items-start">
          <div>
            <h6 class="mb-1 opacity-90">Menunggu Validasi</h6>
            <h3 class="fw-bold mb-0">3</h3>
            <small class="opacity-75">Absensi Guru</small>
          </div>
          <i class="fas fa-hourglass-half fa-2x opacity-80"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stat-card stat-card-gray">
        <div class="card-body d-flex justify-content-between align-items-start">
          <div>
            <h6 class="mb-1 opacity-90">Notifikasi Gagal</h6>
            <h3 class="fw-bold mb-0">2</h3>
            <small class="opacity-75">Hari ini</small>
          </div>
          <i class="fas fa-exclamation-triangle fa-2x opacity-80"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabel Laporan Siswa (Default) -->
  <div class="card" id="laporanSiswa">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-user-graduate me-2"></i>Laporan Absensi Siswa – Bulan Ini
      </h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>No</th>
              <th>NIS</th>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Hadir</th>
              <th>Izin</th>
              <th>Sakit</th>
              <th>Alpha</th>
              <th>% Kehadiran</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>820002.4.21</td>
              <td>Ahmad Abdul Alfaredzki</td>
              <td>X RPL 1</td>
              <td>24</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td><span class="badge bg-success">92.3%</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>820004.4.21</td>
              <td>Ahmad Maulana</td>
              <td>X RPL 1</td>
              <td>23</td>
              <td>2</td>
              <td>1</td>
              <td>0</td>
              <td><span class="badge bg-success">88.5%</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>827003.4.21</td>
              <td>Arslan Ambul Fatoni</td>
              <td>X TKJ 1</td>
              <td>20</td>
              <td>0</td>
              <td>0</td>
              <td>6</td>
              <td><span class="badge bg-warning">76.9%</span></td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Tabel Laporan Guru (Sembunyikan default) -->
  <div class="card d-none" id="laporanGuru">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-chalkboard-teacher me-2"></i>Laporan Absensi Guru – Bulan Ini
      </h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>No</th>
              <th>NIP</th>
              <th>Nama Guru</th>
              <th>Hadir</th>
              <th>Izin</th>
              <th>Sakit</th>
              <th>Dinas Luar</th>
              <th>Alpha</th>
              <th>% Kehadiran</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1980123456</td>
              <td>Abdul Wahid, ST</td>
              <td>24</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td><span class="badge bg-success">88.9%</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>1985654321</td>
              <td>Bu Siti, M.Pd</td>
              <td>22</td>
              <td>2</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td><span class="badge bg-warning">81.5%</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>1990112233</td>
              <td>Pak Budi, SE</td>
              <td>25</td>
              <td>0</td>
              <td>0</td>
              <td>2</td>
              <td>0</td>
              <td><span class="badge bg-success">92.6%</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Grafik Kehadiran -->
  <div class="card mt-4">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-chart-line me-2"></i>Grafik Kehadiran Bulan Ini
      </h5>
    </div>
    <div class="card-body d-flex align-items-center justify-content-center" style="height: 280px;">
      <em class="text-muted">📊 Grafik akan ditampilkan dengan Chart.js</em>
    </div>
  </div>

  <!-- Monitoring Real-time -->
  <div class="card mt-4">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-bell me-2"></i>Monitoring Real-time
      </h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <h6 class="fw-bold mb-3">Absensi Guru Menunggu Validasi</h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item py-2">
              <div class="d-flex justify-content-between">
                <div>
                  <strong>Abdul Wahid, ST</strong><br>
                  <small class="text-muted">Matematika - X RPL 1</small>
                </div>
                <span class="badge bg-warning">07.10 WIB</span>
              </div>
            </li>
            <li class="list-group-item py-2">
              <div class="d-flex justify-content-between">
                <div>
                  <strong>Bu Siti, M.Pd</strong><br>
                  <small class="text-muted">B. Indonesia - X TKJ 1</small>
                </div>
                <span class="badge bg-warning">08.30 WIB</span>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h6 class="fw-bold mb-3">Absensi Siswa Menunggu Verifikasi</h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item py-2">
              <div class="d-flex justify-content-between">
                <div>
                  <strong>Ahmad Alfaredzki</strong><br>
                  <small class="text-muted">X RPL 1</small>
                </div>
                <span class="badge bg-info">07.15 WIB</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 pt-3 border-top text-muted">
    &copy; <?= date('Y') ?> SMK Al-Munawwir Singojuruh | Sistem Absensi Terintegrasi
  </footer>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  // Toggle laporan guru/siswa
  document.getElementById('jenisLaporan').addEventListener('change', function() {
    const jenis = this.value;
    if (jenis === 'guru') {
      document.getElementById('laporanGuru').classList.remove('d-none');
      document.getElementById('laporanSiswa').classList.add('d-none');
      document.getElementById('filterKelas').style.display = 'none';
    } else {
      document.getElementById('laporanSiswa').classList.remove('d-none');
      document.getElementById('laporanGuru').classList.add('d-none');
      document.getElementById('filterKelas').style.display = 'block';
    }
  });
</script>
<?= $this->endSection() ?>