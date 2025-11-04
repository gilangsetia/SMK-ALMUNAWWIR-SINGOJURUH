<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <h1 style="color: #1e3a8a;">Dashboard Absensi</h1>

  <div class="row g-4 mb-4">
    <div class="col-md-3">
      <div class="card stat-card stat-card-blue">
        <div class="card-body d-flex justify-content-between align-items-start">
          <div>
            <h6 class="mb-1 opacity-90">Guru Hadir</h6>
            <h3 class="fw-bold mb-0">24</h3>
            <small class="opacity-75">Total: 30 Guru</small>
          </div>
          <i class="fas fa-user-check fa-2x opacity-80"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stat-card stat-card-orange">
        <div class="card-body d-flex justify-content-between align-items-start">
          <div>
            <h6 class="mb-1 opacity-90">Siswa Hadir</h6>
            <h3 class="fw-bold mb-0">412</h3>
            <small class="opacity-75">Total: 480 Siswa</small>
          </div>
          <i class="fas fa-user-graduate fa-2x opacity-80"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stat-card stat-card-green">
        <div class="card-body d-flex justify-content-between align-items-start">
          <div>
            <h6 class="mb-1 opacity-90">Belum Absen</h6>
            <h3 class="fw-bold mb-0">68</h3>
            <small class="opacity-75">Siswa & Guru</small>
          </div>
          <i class="fas fa-exclamation-triangle fa-2x opacity-80"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stat-card stat-card-gray">
        <div class="card-body d-flex justify-content-between align-items-start">
          <div>
            <h6 class="mb-1 opacity-90">Sudah Diverifikasi</h6>
            <h3 class="fw-bold mb-0">390</h3>
            <small class="opacity-75">Absensi Siswa</small>
          </div>
          <i class="fas fa-check-circle fa-2x opacity-80"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-header">
          <h5 style="color: #1e3a8a; font-weight:700;"><i class="fas fa-chart-line me-2"></i>
          Grafik Kehadiran Minggu Ini</h5>
        </div>
        <div class="card-body d-flex align-items-center justify-content-center" style="height: 240px;">
          <em class="text-muted">📊 Grafik akan ditampilkan dengan Chart.js</em>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100">
        <div class="card-header">
          <h5 style="color: #1e3a8a; font-weight:700;"><i class="fas fa-bell me-2"></i>Notifikasi Terbaru</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item py-3">
            <small class="text-muted d-block">10:15</small>
            <strong>Ananda Rizky</strong> absen: HADIR (Menunggu verifikasi)
          </li>
          <li class="list-group-item py-3">
            <small class="text-muted d-block">09:45</small>
            <strong>Bu Siti</strong> absen: HADIR (Lokasi terverifikasi)
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card mt-4">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700"><i class="fas fa-list-check me-2"></i>Rekap Absensi Hari Ini</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="table-light">
            <tr>
              <th>Kelas</th>
              <th>Hadir</th>
              <th>Izin</th>
              <th>Sakit</th>
              <th>Alpa</th>
              <th>Verifikasi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>X RPL 1</td>
              <td>32</td>
              <td>2</td>
              <td>1</td>
              <td>0</td>
              <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr>
              <td>XI TKJ 2</td>
              <td>28</td>
              <td>0</td>
              <td>3</td>
              <td>1</td>
              <td><span class="badge bg-warning">87%</span></td>
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