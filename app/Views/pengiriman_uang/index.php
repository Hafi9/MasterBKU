<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Daftar Pengiriman Uang</h1>
    <a href="<?= site_url('/pengiriman_uang/create') ?>">Tambah Pengiriman Uang</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kas ID</th>
                <th>Bagian DPRD ID</th>
                <th>Jumlah Uang</th>
                <th>Tanggal Pengiriman</th>
                <th>Keterangan</th>
                <th>User Input</th>
                <th>User Edit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengiriman_uang as $pengiriman): ?>
                <tr>
                    <td><?= $pengiriman['id'] ?></td>
                    <td><?= $pengiriman['kas_id'] ?></td>
                    <td><?= $pengiriman['bagian_dprd_id'] ?></td>
                    <td><?= $pengiriman['jumlah_uang'] ?></td>
                    <td><?= $pengiriman['tanggal_pengiriman'] ?></td>
                    <td><?= $pengiriman['keterangan'] ?></td>
                    <td><?= $pengiriman['user_input'] ?></td>
                    <td><?= $pengiriman['user_edit'] ?></td>
                    <td>
                        <a href="<?= site_url('pengiriman_uang/edit/' . $pengiriman['id']) ?>">Edit</a>
                        <a href="<?= site_url('pengiriman_uang/delete/' . $pengiriman['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
