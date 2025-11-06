<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-siswa">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0 fw-bold">Data Siswa</h4>
    <div>
      <a href="<?= base_url('admin/siswa/create') ?>" class="btn btn-primary me-2">
        <i class="fas fa-plus me-1"></i> Tambah Siswa
      </a>
      <a href="<?= base_url('admin/siswa/import') ?>" class="btn btn-outline-secondary">
        <i class="fas fa-file-excel me-1"></i> Impor Excel
      </a>
    </div>
  </div>

  <!-- Statistik -->
  <div class="row mb-4">
    <div class="col-md-3">
      <div class="stat-card stat-card-green p-3 rounded-3 text-center">
        <h5 class="mb-0"><?= $total_siswa ?></h5>
        <small class="opacity-80">Total Siswa</small>
      </div>
    </div>
    <div class="col-md-3">
      <div class="stat-card stat-card-gray p-3 rounded-3 text-center">
        <h5 class="mb-0"><?= $total_kelas ?></h5>
        <small class="opacity-80">Jumlah Kelas</small>
      </div>
    </div>
  </div>

  <!-- Filter Kelas -->
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
      <form method="GET" class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Kelas</label>
          <select name="kelas" class="form-select">
            <option value="">Semua Kelas</option>
            <?php foreach ($daftar_kelas as $k): ?>
              <option value="<?= $k['id'] ?>" <?= (isset($_GET['kelas']) && $_GET['kelas'] == $k['id']) ? 'selected' : '' ?>>
                <?= esc($k['nama_kelas']) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Cari Nama/NIS</label>
          <input type="text" name="q" class="form-control" value="<?= $_GET['q'] ?? '' ?>" placeholder="Ketik nama atau NIS">
        </div>
        <div class="col-md-4 d-flex align-items-end">
          <button type="submit" class="btn btn-outline-primary me-2">Filter</button>
          <a href="<?= base_url('admin/siswa') ?>" class="btn btn-outline-secondary">Reset</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Tabel Data Siswa -->
  <div class="card border-0 shadow-sm">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th width="5%">No</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Orang Tua</th>
              <th>No. WA Ortu</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($siswa as $index => $s): ?>
            <tr>
              <td><?= $index + 1 ?></td>
              <td><?= esc($s['nis']) ?></td>
              <td><?= esc($s['nama']) ?></td>
              <td><?= esc($s['kelas']) ?></td>
              <td><?= esc($s['nama_ortu']) ?></td>
              <td><?= esc($s['telp_ortu']) ?></td>
              <td class="text-center">
                <a href="<?= base_url("admin/siswa/edit/{$s['id']}") ?>" class="btn btn-sm btn-outline-primary me-1">
                  <i class="fas fa-edit"></i>
                </a>
                <button class="btn btn-sm btn-outline-danger" onclick="confirmDelete(<?= $s['id'] ?>)">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Pagination (jika perlu) -->
      <?php if (isset($pager)): ?>
        <div class="card-footer bg-white">
          <?= $pager->links() ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function confirmDelete(id) {
    if (confirm('Hapus data siswa ini?')) {
      window.location.href = '<?= base_url("admin/siswa/delete/") ?>' + id;
    }
  }
</script>
<?= $this->endSection() ?>