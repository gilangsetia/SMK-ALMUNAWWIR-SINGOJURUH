<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-guru">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0 fw-bold">Data Guru</h4>
    <a href="<?= base_url('admin/guru/create') ?>" class="btn btn-primary">
      <i class="fas fa-plus me-1"></i> Tambah Guru
    </a>
  </div>

  <!-- Statistik Singkat -->
  <div class="row mb-4">
    <div class="col-md-3">
      <div class="stat-card stat-card-blue p-3 rounded-3 text-center">
        <h5 class="mb-0"><?= $total_guru ?></h5>
        <small class="opacity-80">Total Guru</small>
      </div>
    </div>
  </div>

  <!-- Tabel Data Guru -->
  <div class="card border-0 shadow-sm">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th width="5%">No</th>
              <th>NIP</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No. HP</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($guru as $index => $g): ?>
            <tr>
              <td><?= $index + 1 ?></td>
              <td><?= esc($g['nip']) ?></td>
              <td><?= esc($g['nama']) ?></td>
              <td><?= esc($g['email']) ?></td>
              <td><?= esc($g['telp']) ?></td>
              <td class="text-center">
                <a href="<?= base_url("admin/guru/edit/{$g['id']}") ?>" class="btn btn-sm btn-outline-primary me-1">
                  <i class="fas fa-edit"></i>
                </a>
                <button class="btn btn-sm btn-outline-danger" onclick="confirmDelete(<?= $g['id'] ?>)">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function confirmDelete(id) {
    if (confirm('Hapus data guru ini?')) {
      window.location.href = '<?= base_url("admin/guru/delete/") ?>' + id;
    }
  }
</script>
<?= $this->endSection() ?>