<!-- app/Views/kota/create.php -->

<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h2>Tambah User</h2>
    <form action="<?= site_url('user/create') ?>" method="post">
        <label for="nama_user">Nama User:</label>
        <input type="text" name="nama_user" required>
        <br>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password" required>
        <br>
        <label for="role_id">Role:</label>
        <select name="role_id" id="role_id" required>
            <option value="">Select Role</option>
            <?php foreach ($roles as $role): ?>
                <option value="<?= $role['id'] ?>"><?= $role['nama_role'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
