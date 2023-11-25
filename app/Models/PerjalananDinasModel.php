<?php

namespace App\Models;

use CodeIgniter\Model;

class PerjalananDinasModel extends Model
{
    protected $table = 'perjalanan_dinas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'pelaksana_id',
        'bbm_id',
        'status',
        'biaya',
        'bukti_transfer',
        'user_input',
        'user_edit'
        // Kolom lain yang diperlukan
    ];

    public function getPerjalananDinasData()
    {
        return $this->db->table($this->table)
            ->select('perjalanan_dinas.*, nama_pelaksana.nama_pelaksana, bbm.provinsi, bbm.kota')
            ->join('nama_pelaksana', 'nama_pelaksana.id = perjalanan_dinas.pelaksana_id')
            ->join('bbm', 'bbm.id = perjalanan_dinas.bbm_id')
            ->get()
            ->getResultArray();
    }
}
