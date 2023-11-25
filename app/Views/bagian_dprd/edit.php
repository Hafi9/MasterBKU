<!-- edit.php -->

<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Edit Data Bagian DPRD</h1>
    <form action="<?= site_url('bagian_dprd/edit/' . $bagian['id']) ?>" method="post">
        <label for="nama_bagian">Nama Bagian:</label>
        <input type="text" name="nama_bagian" value="<?= $bagian['nama_bagian'] ?>"><br>
        <label for="sisa_anggaran">Sisa Anggaran:</label>
        <input type="text" name="sisa_anggaran" value="<?= $bagian['sisa_anggaran'] ?>"><br>
        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
