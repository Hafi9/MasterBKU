<!-- Views untuk mengedit data bbm -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Edit Data BBM</h1>
    <form action="<?= site_url('bbm/update/' . $bbmData['id']) ?>" method="post">
        <label for="provinsi">Provinsi:</label>
        <input type="text" name="provinsi" value="<?= $bbmData['provinsi'] ?>"><br>

        <label for="kota">Kota:</label>
        <input type="text" name="kota" value="<?= $bbmData['kota'] ?>"><br>

        <label for="harga_bbm">Harga BBM:</label>
        <input type="text" name="harga_bbm" value="<?= $bbmData['harga_bbm'] ?>"><br>

        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
