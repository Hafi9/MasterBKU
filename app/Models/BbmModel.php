<?php

namespace App\Models;

use CodeIgniter\Model;

class BbmModel extends Model
{
    protected $table = 'bbm';
    protected $primaryKey = 'id';
    protected $allowedFields = ['provinsi', 'kota', 'harga_bbm'];

    // Menampilkan semua data bbm
    public function getAllBbm()
    {
        return $this->findAll();
    }

    // Menambah data bbm baru
    public function insertBbm($data)
    {
        return $this->insert($data);
    }

    // Mendapatkan detail data bbm berdasarkan ID
    public function getBbmById($id)
    {
        return $this->find($id);
    }

    // Mengupdate data bbm berdasarkan ID
    public function updateBbm($id, $data)
    {
        return $this->update($id, $data);
    }

    // Menghapus data bbm berdasarkan ID
    public function deleteBbm($id)
    {
        return $this->delete($id);
    }
}
