<!-- app/Views/pegawai/edit.php -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="container-fluid">
        <h2>Edit Pegawai</h2>
        <form action="<?= site_url('pegawai/update/' . $pegawai['id_pegawai']) ?>" method="post">
            <!-- Your form fields go here -->
            <label>Nama:</label>
            <input type="text" name="nama_pegawai" value="<?= $pegawai['nama_pegawai'] ?>" required><br>

            <label>Jabatan:</label>
            <input type="text" name="jabatan" value="<?= $pegawai['jabatan'] ?>" required><br>

            <label>Email:</label>
            <input type="email" name="email" value="<?= $pegawai['email'] ?>" required><br>

            <label>Role:</label>
            <select name="role" required>
                <option value="admin" <?= ($pegawai['role'] == 'admin') ? 'selected' : '' ?>>Admin</option>
                <option value="user" <?= ($pegawai['role'] == 'user') ? 'selected' : '' ?>>User</option>
            </select><br>

            <input type="submit" value="Simpan">
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
