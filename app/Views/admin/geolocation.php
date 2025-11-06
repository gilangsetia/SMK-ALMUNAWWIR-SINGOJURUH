<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="color: #1e3a8a;">Radius Geolocation</h1>
    <button class="btn btn-success" id="getLocation">
      <i class="fas fa-map-marker-alt me-1"></i> Ambil Lokasi Sekarang
    </button>
  </div>

  <div class="row g-4">
    <!-- Form Pengaturan -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h5 style="color: #1e3a8a; font-weight:700;">
            <i class="fas fa-cog me-2"></i>Pengaturan Geolocation
          </h5>
        </div>
        <div class="card-body">
          <form id="geoForm">
            <div class="mb-3">
              <label class="form-label fw-medium">Nama Sekolah</label>
              <input type="text" class="form-control" value="SMK Al-Munawwir Singojuruh" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-medium">Alamat Sekolah</label>
              <textarea class="form-control" rows="2" required>Jl. Raya Singojuruh No. 123, Banyuwangi</textarea>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label class="form-label fw-medium">Latitude (Lintang)</label>
                <input type="text" class="form-control" id="latitude" value="-8.123456" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-medium">Longitude (Bujur)</label>
                <input type="text" class="form-control" id="longitude" value="112.987654" required>
              </div>
            </div>

            <div class="mb-3 mt-3">
              <label class="form-label fw-medium">
                Radius Valid Absensi <small class="text-muted">(dalam meter)</small>
              </label>
              <input type="range" class="form-range" min="50" max="500" step="10" id="radiusSlider" value="100">
              <div class="d-flex justify-content-between">
                <span class="text-muted">50 m</span>
                <span id="radiusValue" class="fw-bold">100 meter</span>
                <span class="text-muted">500 m</span>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label fw-medium">
                Toleransi Waktu Absen <small class="text-muted">(menit sebelum/sesudah jam pelajaran)</small>
              </label>
              <select class="form-select">
                <option>5</option>
                <option selected>15</option>
                <option>20</option>
                <option>30</option>
              </select>
            </div>

            <div class="alert alert-info">
              <i class="fas fa-info-circle me-1"></i>
              Siswa dan guru hanya bisa absen jika berada dalam radius ini dan dalam toleransi waktu.
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Simpan Pengaturan
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Preview Peta -->
    <div class="col-lg-6">
      <div class="card h-100">
        <div class="card-header">
          <h5 style="color: #1e3a8a; font-weight:700;">
            <i class="fas fa-map me-2"></i>Preview Area Valid
          </h5>
        </div>
        <div class="card-body d-flex flex-column">
          <div class="alert alert-warning mb-3">
            <i class="fas fa-exclamation-triangle me-1"></i>
            Untuk melihat peta interaktif, pastikan API Google Maps diaktifkan di backend.
          </div>
          <div class="text-center flex-grow-1 d-flex flex-column justify-content-center align-items-center bg-light rounded">
            <i class="fas fa-map-marker-alt fa-3x text-secondary mb-3"></i>
            <p class="mb-1">
              <strong>Titik Sekolah:</strong><br>
              <span id="coordinateDisplay">-8.123456, 112.987654</span>
            </p>
            <p class="text-muted">
              Radius: <span id="radiusDisplay">100</span> meter
            </p>
            <div class="mt-3" style="width: 200px; height: 200px;">
              <div class="position-relative" style="width: 100%; height: 100%;">
                <div class="position-absolute top-50 start-50 translate-middle" style="width: 20px; height: 20px; background: #1e3a8a; border-radius: 50%;"></div>
                <div class="position-absolute top-50 start-50 translate-middle" style="width: 160px; height: 160px; border: 2px dashed #10b981; border-radius: 50%;"></div>
                <div class="position-absolute top-50 start-50 translate-middle text-center" style="width: 160px; margin-top: 85px; font-size: 0.8rem; color: #10b981;">
                  Area Valid (100m)
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Petunjuk Penggunaan -->
  <div class="card mt-4">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-book me-2"></i>Petunjuk Penggunaan
      </h5>
    </div>
    <div class="card-body">
      <ul class="mb-0">
        <li>Radius <strong>100 meter</strong> umumnya cukup untuk area sekolah (termasuk gerbang, halaman, dan ruang kelas).</li>
        <li>Jangan atur radius terlalu besar (misal: 1 km) agar tidak bisa absen dari rumah.</li>
        <li>Toleransi waktu <strong>±15 menit</strong> memungkinkan guru/siswa absen sebelum pelajaran dimulai.</li>
        <li>Pastikan lokasi sekolah diambil dari tempat strategis (misal: depan gerbang utama).</li>
      </ul>
    </div>
  </div>

  <footer class="text-center mt-5 pt-3 border-top text-muted">
    &copy; <?= date('Y') ?> SMK Al-Munawwir Singojuruh | Sistem Absensi Terintegrasi
  </footer>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  // Update radius display
  const radiusSlider = document.getElementById('radiusSlider');
  const radiusValue = document.getElementById('radiusValue');
  const radiusDisplay = document.getElementById('radiusDisplay');

  radiusSlider.addEventListener('input', function() {
    const value = this.value;
    radiusValue.textContent = value + ' meter';
    radiusDisplay.textContent = value;
  });

  // Ambil lokasi saat ini (untuk admin di sekolah)
  document.getElementById('getLocation').addEventListener('click', function() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        function(position) {
          document.getElementById('latitude').value = position.coords.latitude.toFixed(6);
          document.getElementById('longitude').value = position.coords.longitude.toFixed(6);
          document.getElementById('coordinateDisplay').textContent = 
            position.coords.latitude.toFixed(6) + ', ' + position.coords.longitude.toFixed(6);
        },
        function() {
          alert('Tidak dapat mengakses lokasi Anda. Pastikan izin lokasi diaktifkan.');
        }
      );
    } else {
      alert('Browser Anda tidak mendukung geolocation.');
    }
  });

  // Simpan form
  document.getElementById('geoForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Pengaturan geolocation berhasil disimpan!');
    // Nanti: kirim ke backend via AJAX
  });
</script>
<?= $this->endSection() ?>