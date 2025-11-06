<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="color: #1e3a8a;">Notifikasi WhatsApp</h1>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalUjiNotifikasi">
      <i class="fas fa-paper-plane me-1"></i> Kirim Uji Coba
    </button>
  </div>

  <div class="row g-4">
    <!-- Konfigurasi Gateway -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h5 style="color: #1e3a8a; font-weight:700;">
            <i class="fab fa-whatsapp me-2"></i>Konfigurasi WhatsApp Gateway
          </h5>
        </div>
        <div class="card-body">
          <form id="waConfigForm">
            <div class="mb-3">
              <label class="form-label fw-medium">Penyedia Layanan</label>
              <select class="form-select" id="provider">
                <option value="fonnte">Fonnte</option>
                <option value="wablas">Wablas</option>
                <option value="custom">Custom API</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label fw-medium">API Key</label>
              <input type="password" class="form-control" value="••••••••••••••••" placeholder="Masukkan API Key">
              <div class="form-text">
                Dapatkan di dashboard penyedia WhatsApp gateway Anda.
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label fw-medium">API URL (jika Custom)</label>
              <input type="url" class="form-control" value="https://api.fonnte.com/send" placeholder="https://...">
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="statusAktif" checked>
              <label class="form-check-label" for="statusAktif">
                Aktifkan Notifikasi WhatsApp
              </label>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Simpan Konfigurasi
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Template Pesan -->
    <div class="col-lg-6">
      <div class="card h-100">
        <div class="card-header">
          <h5 style="color: #1e3a8a; font-weight:700;">
            <i class="fas fa-edit me-2"></i>Template Pesan Notifikasi
          </h5>
        </div>
        <div class="card-body d-flex flex-column">
          <p class="text-muted mb-2">
            Gunakan placeholder berikut:
          </p>
          <div class="mb-2">
            <span class="badge bg-light text-dark me-1">[nama_siswa]</span>
            <span class="badge bg-light text-dark me-1">[kelas]</span>
            <span class="badge bg-light text-dark me-1">[mapel]</span>
            <span class="badge bg-light text-dark me-1">[status]</span>
            <span class="badge bg-light text-dark me-1">[waktu_input]</span>
            <span class="badge bg-light text-dark">[nama_ortu]</span>
          </div>

          <label class="form-label fw-medium">Pesan ke Orang Tua</label>
          <textarea class="form-control flex-grow-1" rows="8" id="templatePesan">
📚 *NOTIFIKASI ABSENSI SMK AL-MUNAWWIR*

Yth. Bapak/Ibu [nama_ortu],

Ananda *[nama_siswa]* ([kelas])
Tanggal: <?= date('d F Y') ?>
Jam Pelajaran: [jam_pelajaran]
Mata Pelajaran: *[mapel]*
Status: *[status]*

Waktu Input: [waktu_input]

Terima kasih.
- SMK Al-Munawwir Singojuruh
          </textarea>

          <div class="mt-3">
            <button class="btn btn-outline-primary w-100" id="previewPesan">
              <i class="fas fa-eye me-1"></i> Pratinjau Pesan
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Log Pengiriman -->
  <div class="card mt-4">
    <div class="card-header">
      <h5 style="color: #1e3a8a; font-weight:700;">
        <i class="fas fa-history me-2"></i>Log Pengiriman Terakhir
      </h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>Waktu</th>
              <th>Penerima</th>
              <th>Tipe Pesan</th>
              <th>Status</th>
              <th>Pesan Error</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>04 Nov 10:15</td>
              <td>0813••••1234</td>
              <td>Absensi Siswa</td>
              <td><span class="badge bg-success">Terkirim</span></td>
              <td>—</td>
            </tr>
            <tr>
              <td>04 Nov 09:45</td>
              <td>0812••••5678</td>
              <td>Absensi Siswa</td>
              <td><span class="badge bg-danger">Gagal</span></td>
              <td>Invalid phone number</td>
            </tr>
            <tr>
              <td>04 Nov 08:00</td>
              <td>0811••••9012</td>
              <td>Validasi Guru</td>
              <td><span class="badge bg-success">Terkirim</span></td>
              <td>—</td>
            </tr>
          </tbody>
        </table>
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
        <li>Notifikasi hanya dikirim **setelah absensi siswa diverifikasi** oleh guru.</li>
        <li>Pastikan **nomor WhatsApp orang tua** sudah diisi di data siswa.</li>
        <li>Format teks mendukung <strong>bold</strong> dengan tanda <code>*</code> (sesuai aturan WhatsApp).</li>
        <li>Jika menggunakan Fonnte/Wablas, cukup isi API Key — URL otomatis terisi.</li>
      </ul>
    </div>
  </div>

  <footer class="text-center mt-5 pt-3 border-top text-muted">
    &copy; <?= date('Y') ?> SMK Al-Munawwir Singojuruh | Sistem Absensi Terintegrasi
  </footer>
</div>

<!-- Modal: Kirim Uji Coba -->
<div class="modal fade" id="modalUjiNotifikasi" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Kirim Notifikasi Uji Coba</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Kirim pesan uji coba ke nomor WhatsApp admin.</p>
        <div class="mb-3">
          <label class="form-label">Nomor WhatsApp Tujuan</label>
          <input type="text" class="form-control" placeholder="081234567890" value="081234567890">
        </div>
        <div class="alert alert-info">
          <i class="fas fa-info-circle me-1"></i>
          Pastikan nomor sudah terdaftar di WhatsApp dan sesuai format internasional.
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success" id="kirimUji">
          <i class="fas fa-paper-plane me-1"></i> Kirim Sekarang
        </button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  // Pratinjau pesan
  document.getElementById('previewPesan').addEventListener('click', function() {
    const template = document.getElementById('templatePesan').value;
    const sample = template
      .replace(/\[nama_siswa\]/g, 'Ahmad Alfaredzki')
      .replace(/\[kelas\]/g, 'X RPL 1')
      .replace(/\[mapel\]/g, 'Matematika')
      .replace(/\[status\]/g, 'HADIR')
      .replace(/\[waktu_input\]/g, '07.20 WIB')
      .replace(/\[nama_ortu\]/g, 'Bpk. Ali')
      .replace(/\[jam_pelajaran\]/g, '07.00–08.30');

    alert('Contoh Pesan:\n\n' + sample);
  });

  // Kirim uji coba
  document.getElementById('kirimUji').addEventListener('click', function() {
    alert('Notifikasi uji coba berhasil dikirim!');
    // Nanti: kirim via AJAX ke backend
  });

  // Simpan konfigurasi
  document.getElementById('waConfigForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Konfigurasi WhatsApp berhasil disimpan!');
  });
</script>
<?= $this->endSection() ?>