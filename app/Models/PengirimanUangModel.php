<?php

namespace App\Models;

use CodeIgniter\Model;

class PengirimanUangModel extends Model
{
    protected $table = 'pengiriman_uang';
    protected $allowedFields = ['kas_id', 'bagian_dprd_id', 'jumlah_uang', 'tanggal_pengiriman', 'keterangan', 'user_input', 'user_edit'];

    public function insertPengirimanUang($data)
    {
        $this->insert($data);
    }
}
