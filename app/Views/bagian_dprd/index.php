<!-- index.php -->

<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Data Bagian DPRD</h1>
    <a href="<?= site_url('bagian_dprd/create') ?>">Tambah Data</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Bagian</th>
            <th>Sisa Anggaran</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($bagian as $data) : ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nama_bagian'] ?></td>
            <td><?= $data['sisa_anggaran'] ?></td>
            <td>
                <a href="<?= site_url('bagian_dprd/edit/' . $data['id']) ?>">Edit</a>
                <a href="<?= site_url('bagian_dprd/delete/' . $data['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?= $this->endSection() ?>
