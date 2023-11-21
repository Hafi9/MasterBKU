<!-- Views untuk menampilkan data laporan perjalanan dinas -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Laporan Perjalanan Dinas</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= site_url('laporan/create') ?>">Tambah Laporan</a>
                        <table id="table1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Laporan</th>
                                    <th>ID Perjalanan</th>
                                    <th>SP</th>
                                    <th>SPPD</th>
                                    <th>LP</th>
                                    <th>Kwitansi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($laporans as $laporan) : ?>
                                    <tr>
                                        <td><?= $laporan['id'] ?></td>
                                        <td><?= $laporan['perdin_id'] ?></td>
                                        <td><?= $laporan['sp'] ?></td>
                                        <td><?= $laporan['sppd'] ?></td>
                                        <td><?= $laporan['lp'] ?></td>
                                        <td><?= $laporan['kwitansi'] ?></td>
                                        <td><?= $laporan['status'] ?></td>
                                        <td>
                                            <a href="<?= site_url('laporan_perjalanan_dinas/edit/' . $laporan['id']) ?>">Edit</a>
                                            <a href="<?= site_url('laporan_perjalanan_dinas/delete/' . $laporan['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
