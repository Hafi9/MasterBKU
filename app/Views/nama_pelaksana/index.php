<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pelaksana</h3>
    </div>
<div class="card-body">
<a href="<?= site_url('/nama_pelaksana/create') ?>">Tambah Nama Pelaksana</a>
    <table id="table1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama Pelaksana</th>
                <th>NIK/NIP</th>
                <th>Jabatan</th>
                <th>Status Pegawai</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>User Input</th>
                <th>User Edit</th>
                <th>Actions</th>
            </tr>
        </thead>
            <?php foreach ($nama_pelaksanas as $nama_pelaksana) : ?>
            <tbody>
                  <tr>
                    <td><?= $nama_pelaksana['nama_pelaksana'] ?></td>
                    <td><?= $nama_pelaksana['nik_nip'] ?></td>
                    <td><?= $nama_pelaksana['jabatan'] ?></td>
                    <td><?= $nama_pelaksana['status_pegawai'] ?></td>
                    <td><?= $nama_pelaksana['no_telp'] ?></td>
                    <td><?= $nama_pelaksana['email'] ?></td>
                    <td><?= $nama_pelaksana['user_input'] ?></td>
                    <td><?= $nama_pelaksana['user_edit'] ?></td>
                    <td>
                        <a href="<?= site_url('/nama_pelaksana/edit/' . $nama_pelaksana['id']) ?>">Edit</a>
                        <a href="<?= site_url('/nama_pelaksana/delete/' . $nama_pelaksana['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                    </td>
                  </tr>
            </tbody>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>
