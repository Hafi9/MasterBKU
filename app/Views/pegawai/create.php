<!-- app/Views/pegawai/create.php -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="container-fluid">
        <h2>Tambah Pegawai</h2>
        <form action="<?= site_url('pegawai/store') ?>" method="post">
            <!-- Your form fields go here -->
            <label>Nama:</label>
            <input type="text" name="nama_pegawai" required><br>

            <label>Jabatan:</label>
            <input type="text" name="jabatan" required><br>

            <label>Email:</label>
            <input type="email" name="email" required><br>

            <label>Password:</label>
            <input type="password" name="password" required><br>

            <label>Role:</label>
            <select name="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select><br>

            <input type="submit" value="Simpan">
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
