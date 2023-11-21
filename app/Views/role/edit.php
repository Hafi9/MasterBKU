<!-- app/Views/kegiatan/edit.php -->

<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h2>Edit Kegiatan</h2>
    <form action="<?= site_url('role/edit/' . $role['id']) ?>" method="post">
        <label for="nama_role">Nama Role:</label>
        <input type="text" name="nama_role" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
<?= $this->endSection() ?>
