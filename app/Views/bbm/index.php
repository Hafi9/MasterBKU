<!-- Views untuk menampilkan data bbm -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data BBM</h3>
    </div>
<div class="card-body">
<a href="<?= site_url('bbm/create') ?>">Tambah Data</a>
    <table id="table1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Harga BBM</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <?php foreach ($bbmData as $bbm) : ?>
            <tbody>
                  <tr>
                    <td><?= $bbm['provinsi'] ?></td>
                    <td><?= $bbm['kota'] ?></td>
                    <td><?= 'Rp.' . number_format($bbm['harga_bbm'], 0, ',', '.') ?></td>
                    <td>
                        <a href="<?= site_url('bbm/edit/' . $bbm['id']) ?>">Edit</a>
                        <a href="<?= site_url('bbm/delete/' . $bbm['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                  </tr>
            </tbody>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>
