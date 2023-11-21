<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Role</h3>
    </div>
<div class="card-body">
<a href="<?= site_url('role/create') ?>">Tambah Role</a>
    <table id="table1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <?php foreach ($roles as $role): ?>
            <tbody>
                  <tr>
                    <td><?= $role['id']; ?></td>
                    <td><?= $role['nama_role']; ?></td>
                    <td>
                        <a href="<?= site_url('role/edit/' . $role['id']) ?>">Edit</a>
                        <a href="<?= site_url('role/delete/' . $role['id']) ?>">Delete</a>
                    </td>
                  </tr>
            </tbody>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>

