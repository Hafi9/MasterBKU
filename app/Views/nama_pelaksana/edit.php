<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Edit Nama Pelaksana</h1>
    <form action="<?= site_url('/nama_pelaksana/edit/' . $nama_pelaksana['id']) ?>" method="post">
        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" value="<?= $nama_pelaksana['user_id'] ?>" required><br>
        <label for="nama_pelaksana">Nama Pelaksana:</label>
        <input type="text" name="nama_pelaksana" value="<?= $nama_pelaksana['nama_pelaksana'] ?>" required><br>
        <!-- Lanjutkan dengan input untuk kolom lainnya -->
        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
