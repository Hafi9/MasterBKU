<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Tambah Pengiriman Uang</h1>
    <form action="<?= site_url('/pengiriman_uang/create') ?>" method="post">
        <label for="bagian_dprd_id">Pilih Bagian:</label>
        <select name="bagian_dprd_id" required>
            <?php foreach ($bagianDprd as $bagian): ?>
                <option value="<?= $bagian['id'] ?>"><?= $bagian['nama_bagian'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="jumlah_uang">Jumlah Uang:</label>
        <input type="text" name="jumlah_uang"><br>

        <label for="tanggal_pengiriman">Tanggal Pengiriman:</label>
        <input type="date" name="tanggal_pengiriman"><br>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan"></textarea><br>

        <label for="user_input">User Input:</label>
        <input type="text" name="user_input"><br>

        <label for="user_edit">User Edit:</label>
        <input type="text" name="user_edit"><br>

        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
