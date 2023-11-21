<!-- Views untuk membuat data laporan perjalanan dinas baru -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Tambah Data Laporan Perjalanan Dinas</h1>
    <form action="<?= site_url('laporan/create') ?>" method="post" enctype="multipart/form-data">
        <label for="perdin_id">ID Perjalanan:</label>
        <input type="text" name="perdin_id"><br>

        <label for="sp">SP:</label>
        <input type="text" name="sp"><br>

        <label for="sppd">SPPD:</label>
        <input type="text" name="sppd"><br>

        <label for="lp">LP:</label>
        <input type="text" name="lp"><br>

        <label for="kwitansi">Kwitansi:</label>
        <input type="text" name="kwitansi"><br>

        <label for="laporan_pdf">Laporan PDF:</label>
        <input type="file" name="laporan_pdf"><br>

        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
