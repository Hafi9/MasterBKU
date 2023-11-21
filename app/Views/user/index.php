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
<a href="<?= site_url('user/create') ?>">Tambah User</a>
    <table id="table1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama User</th>
                <th>Username</th>
                <th>Role</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <?php foreach ($users as $user) : ?>
            <tbody>
                  <tr>
                    <td><?= $user['nama_user'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['nama_role'] ?></td>
                    <td><?= $user['password'] ?></td>
                    <td>
                        <a href="<?= site_url('user/edit/' . $user['id']) ?>">Edit</a>
                        <a href="<?= site_url('user/delete/' . $user['id']) ?>">Delete</a>
                    </td>
                    </td>
                  </tr>
            </tbody>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>

