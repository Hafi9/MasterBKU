<!-- Views untuk mengkonfirmasi penghapusan data bbm -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Konfirmasi Penghapusan</h1>
    <p>Apakah Anda yakin ingin menghapus data ini?</p>
    <form action="<?= site_url('bbm/remove/' . $bbmData['id']) ?>" method="post">
        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
        <a href="<?= site_url('bbm') ?>">Batal</a>
    </form>
<?= $this->endSection() ?>
