<!-- app/Views/kota/edit.php -->

<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h2>Edit Kota</h2>
    <form action="<?= site_url('user/edit/' . $user['id']) ?>" method="post">
        <label for="nama_user">Nama User:</label>
        <input type="text" name="nama_user" value="<?= $user['nama_user'] ?>" required>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?= $user['username'] ?>" required>
        <label for="password">Password:</label>
        <input type="text" name="password" value="<?= $user['password'] ?>" required>
        <br>
        
        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
