<!-- edit.php -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <h1>Edit Data Perjalanan Dinas</h1>
    <form action="<?= site_url('/perjalanan_dinas/edit/' . $perjalanan_dinas['id']) ?>" method="post">
        <label for="pelaksana_id">Pilih Pelaksana:</label>
        <select name="pelaksana_id" required>
            <?php foreach ($namaPelaksana as $pelaksana): ?>
                <option value="<?= $pelaksana['id'] ?>" <?= ($pelaksana['id'] == $perjalanan_dinas['pelaksana_id']) ? 'selected' : '' ?>>
                    <?= $pelaksana['nama_pelaksana'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <label for="bbm_id">Pilih BBM:</label>
        <select name="bbm_id" required>
            <?php foreach ($bbm as $item): ?>
                <option value="<?= $item['id'] ?>" <?= ($item['id'] == $perjalanan_dinas['bbm_id']) ? 'selected' : '' ?>>
                    <?= $item['nama_bbm'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <!-- Other fields -->
        <button type="submit">Simpan</button>
    </form>
<?= $this->endSection() ?>
