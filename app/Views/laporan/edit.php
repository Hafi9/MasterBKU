<!-- Views untuk mengedit data laporan perjalanan dinas -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Edit Data Laporan Perjalanan Dinas</h1>
    <form action="<?= site_url('laporan/edit/' . $laporan['id']) ?>" method="post">
        <label for="perdin_id">ID Perjalanan:</label>
        <input type="text" name="perdin_id" value="<?= $laporan['perdin_id'] ?>"><br>

        <label for="sp">SP:</label>
        <input type="text" name="sp" value="<?= $laporan['sp'] ?>"><br>

        <label for="sppd">SPPD:</label>
        <input type="text" name="sppd" value="<?= $laporan['sppd'] ?>"><br>

        <label for="lp">LP:</label>
        <input type="text" name="lp" value="<?= $laporan['lp'] ?>"><br>

        <label for="kwitansi">Kwitansi:</label>
        <input type="text" name="kwitansi" value="<?= $laporan['kwitansi'] ?>"><br>

        <label for="laporan_pdf">Laporan PDF:</label>
        <input type="file" name="laporan_pdf"><br>

        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
