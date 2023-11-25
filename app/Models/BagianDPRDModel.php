<?php

namespace App\Models;

use CodeIgniter\Model;

class BagianDPRDModel extends Model
{
    protected $table = 'bagian_dprd';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_bagian', 'sisa_anggaran'];

    // ... (method-method lainnya)

    public function updateSisaAnggaran($bagianDprdId, $newSisaAnggaran)
    {
        $this->where('id', $bagianDprdId)
            ->set('sisa_anggaran', $newSisaAnggaran)
            ->update();
    }

    public function getBagianDPRD()
    {
        return $this->findAll();
    }

    public function getBagianDPRDByID($id)
    {
        return $this->find($id);
    }

    public function insertBagianDPRD($data)
    {
        return $this->insert($data);
    }

    public function updateBagianDPRD($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteBagianDPRD($id)
    {
        return $this->delete($id);
    }
}
