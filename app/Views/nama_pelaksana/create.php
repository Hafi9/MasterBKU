<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Tambah Nama Pelaksana</h1>
        <form action="<?= site_url('/nama_pelaksana/create') ?>" method="post">
        <label for="user_id">Pilih User ID:</label>
        <select name="user_id" required>
            <?php foreach ($usersWithUserRole as $user): ?>
                <option value="<?= $user['id'] ?>"><?= $user['nama_user'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="nama_pelaksana">Nama Pelaksana:</label>
        <input type="text" name="nama_pelaksana" required><br>
        <label for="nik_nip">NIK/NIP:</label>
        <input type="number" name="nik_nip" required><br>
        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" required><br>
        <label for="status_pegawai">Status Pegawai:</label>
        <select name="status_pegawai" required>
            <option value="pns">PNS</option>
            <option value="dewan">Dewan</option>
            <option value="thl">THL</option>
        </select><br>
        <label for="no_telp">Nomor Telepon:</label>
        <input type="tel" name="no_telp"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="user_input">User Input:</label>
        <input type="text" name="user_input" required><br>
        <label for="user_edit">User Edit:</label>
        <input type="text" name="user_edit" required><br>
        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
