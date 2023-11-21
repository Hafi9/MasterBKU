<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanPerjalananDinasModel extends Model
{
    protected $table = 'laporan_perjalanan_dinas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['perdin_id', 'sp', 'sppd', 'lp', 'kwitansi', 'laporan_pdf', 'status'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getLaporans()
    {
        return $this->findAll();
    }

    public function saveLaporan($data)
    {
        return $this->insert($data);
    }

    public function findLaporan($id)
    {
        return $this->find($id);
    }

    public function updateLaporan($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteLaporan($id)
    {
        return $this->delete($id);
    }
}
