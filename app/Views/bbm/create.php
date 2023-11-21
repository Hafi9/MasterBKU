<!-- Views untuk membuat data bbm baru -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Tambah Data BBM</h1>
    <form action="<?= site_url('bbm/create') ?>" method="post">
        <label for="provinsi">Provinsi:</label>
        <input type="text" name="provinsi"><br>

        <label for="kota">Kota:</label>
        <input type="text" name="kota"><br>

        <label for="harga_bbm">Harga BBM:</label>
        <input type="text" name="harga_bbm"><br>

        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
