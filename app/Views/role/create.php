<!-- app/Views/kegiatan/create.php -->

<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h2>Tambah Role</h2>
    <form action="<?= site_url('role/create') ?>" method="post">
        <label for="nama_role">Nama Role:</label>
        <input type="text" name="nama_role" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
