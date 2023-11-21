<!-- app/Views/pegawai/index.php -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>
    </div>
<div class="card-body">
<a href="<?= site_url('pegawai/create') ?>">Tambah Pegawai</a>
    <table id="table1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <?php foreach ($pegawai as $row) : ?>
            <tbody>
                  <tr>
                    <td><?= $row['id_pegawai'] ?></td>
                    <td><?= $row['nama_pegawai'] ?></td>
                    <td><?= $row['jabatan'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['role'] ?></td>
                    <td>
                    <a href="<?= site_url('pegawai/edit/' . $row['id_pegawai']) ?>">Edit</a>
                    <a href="<?= site_url('pegawai/delete/' . $row['id_pegawai']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                    </td>
                  </tr>
            </tbody>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>
