<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Hapus Nama Pelaksana</h1>
    <p>Apakah Anda yakin ingin menghapus data ini?</p>
    <form action="<?= site_url('/nama_pelaksana/delete/' . $nama_pelaksana['id']) ?>" method="post">
        <button type="submit">Hapus</button>
    </form>
<?= $this->endSection() ?>
